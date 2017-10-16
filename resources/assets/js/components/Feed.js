import React, { Component } from 'react';
import Ticker from './Ticker';
import ReactTable from 'react-table';
import 'react-table/react-table.css';
import './css/feed.css';
const allColumns = [{
    Header: 'Date',
    accessor: 'transactionDate',
    maxWidth:95
}, {
    Header: 'Description',
    accessor: 'description',
}, {
    Header: 'Amount',
    accessor: 'amount',
    maxWidth: 120,
    Cell: props => <span className={props.value < 0 ? 'amount amount-negative':'amount amount-positive'}>{props.value}</span>
}, {
    Header: 'Category',
    accessor:'category',
}, {
    Header: 'Withdrawal',
    accessor: 'withdrawal',
    Cell: props => <span className="amount amount-negative">{props.value}</span>
}, {
    Header: 'Deposit',
    accessor: 'deposit',
    Cell: props => <span className="amount amount-positive">{props.value}</span>
}];
/**
 * Holds all transactions and filters them as needed.
 */
class Feed extends Component {

    constructor(props) {
        super(props);
        this.state = {
            transactions:[],
            processed:[],
            columns:[]
        };
        this.isEmpty = this.isEmpty.bind(this);
        this.filter = this.filter.bind(this);
        this.dismissCategory = this.dismissCategory.bind(this);
    }

    componentDidMount() {
        if(!this.isEmpty(this.props.transactions)) {
            this.setState({
                transactions:this.props.transactions,
                processed:this.props.transactions
            })
        }
    }

    componentWillReceiveProps(nextProps, prevState) {
        if(!this.isEmpty(nextProps.transactions)) {
            let processed = this.filter(nextProps.filters, nextProps.transactions);
            let columns = [];
            allColumns.map(item => {
                if(nextProps.filters.columns.has(item.accessor)) {
                    columns.push(item);
                }
            });
            this.setState({
                transactions:nextProps.transactions.transactions,
                processed:processed,
                columns:columns
            });
        }
    }

    /**
     * Only filter when receiving new props.
     * @param filters
     * @param transactions
     * @returns {*}
     */
    filter(filters, transactions) {
        let accounts = filters.accounts;
        let categories = filters.categories;
        if(accounts.size == 0 && categories.size == 0) { //no filters
            return transactions;
        }
        let filtered = transactions.filter(transaction => {
            if(accounts.size == 0) {
                return categories.has(transaction.category);
            } else if(categories.size == 0) {
                return accounts.has(transaction.accountId);
            }
            return categories.has(transaction.category) && accounts.has(transaction.accountId);
        });
        return filtered;
    }

    isEmpty(obj) {
        return obj == undefined || (Array.isArray(obj) && obj.length == 0);
    }

    dismissCategory(e) {
        let id = e.target.parentElement.dataset.id; //anchor tag
        let replacement = new Set;
        for(let tag of this.props.filters.categories) {
            replacement.add(tag);
        }
        replacement.delete(id);
        let filters = {
            categories:replacement,
            accounts:this.props.filters.accounts,
            columns:this.props.filters.columns
        };
        this.props.onFilterChange(filters);
    }

    render() {
        let categories = [];
        for(let c of this.props.filters.categories) {
            categories.push(
                <span className="label label-primary category-tag" key={'feed-tag-category-'+c}>{c}
                <a onClick={this.dismissCategory} data-id={c} style={{color:"white"}}>
                    <i className="remove glyphicon glyphicon-remove-sign glyphicon-white"></i></a>
                </span>
            );
        }
        return (
            <div className="panel panel-default feed">
                <div className="panel-heading">
                    <h3>Overview</h3>
                </div>
                <div className="panel-body">
                    <div>Categories: {this.props.filters.categories.size != 0 ? categories :
                        <span className="label label-default">No selected categories</span>}
                    </div>
                    <Ticker processed={this.state.processed}/>
                    <hr/>

                    {!this.isEmpty(this.state.processed) ?
                        <ReactTable data={this.state.processed}
                                    columns={this.state.columns}/> :
                        <div><h3>No matching transactions</h3></div>}
                </div>
            </div>
        );
    }
}

export default Feed;
