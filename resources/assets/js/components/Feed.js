import React, { Component } from 'react';
import Ticker from './Ticker';
import ReactTable from 'react-table';
import 'react-table/react-table.css';

const defaultColumns = [{
    Header: 'Date',
    accessor: 'transactionDate'
}, {
    Header: 'Description',
    accessor: 'description',
}, {
    Header: 'Category',
    accessor:'category'
}, {
    Header: 'Amount',
    accessor: 'amount'
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
            columns:defaultColumns
        };
        this.isEmpty = this.isEmpty.bind(this);
        this.filter = this.filter.bind(this);
    }

    componentDidMount() {
        if(!this.isEmpty(this.props.transactions)) {
            this.setState({
                transactions:this.props.transactions.transactions,
                processed:this.props.transactions.transactions
            })
        }
    }

    componentWillReceiveProps(nextProps, prevState) {
        if(!this.isEmpty(nextProps.transactions)) {
            let processed = this.filter(nextProps.filters, nextProps.transactions.transactions);
            this.setState({
                transactions:nextProps.transactions.transactions,
                processed:processed,
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
        if(accounts.size == 0 && categories.size == 0) {
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

    render() {
        console.log(this.props.filters.categories);
        return (
            <div className="panel">
                <div className="panel-heading">
                    <h3>Transactions</h3> <Ticker processed={this.state.processed}/>
                    <hr/>
                    <div>Tags: {this.props.filters.categories.size != 0 ? this.props.filters.categories :
                        <span className="label label-default">No tags</span>}</div>
                </div>
                <div className="panel-body">
                    {!this.isEmpty(this.state.processed) &&
                        <ReactTable data={this.state.processed}
                                    columns={this.state.columns}/>}
                </div>
            </div>
        );
    }
}

export default Feed;
