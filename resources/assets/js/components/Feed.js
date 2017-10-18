import React, { Component } from 'react';
import ReactTable from 'react-table';
import dateFormat from 'dateformat';
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
    Header: 'Category',
    accessor:'category',
    maxWidth:160
}, {
    Header: 'Amount',
    accessor: 'amount',
    maxWidth: 90,
    className: 'currency-field',
    Cell: props => <span className={props.value < 0 ? 'amount amount-negative':'amount amount-positive'}>
        ${((props.value*100)/100).toFixed(2)}
        </span>
}, {
    Header: 'Withdrawal',
    accessor: 'withdrawal',
    maxWidth: 90,
    className: 'currency-field',
    Cell: props => <span className="amount amount-negative">{props.value?'$'+(props.value*100/100).toFixed(2):null}</span>
}, {
    Header: 'Deposit',
    accessor: 'deposit',
    maxWidth: 90,
    className: 'currency-field',
    Cell: props => <span className="amount amount-positive">{props.value?'$'+(props.value*100/100).toFixed(2):null}</span>
}, {
    Header: 'Running Balance',
    accessor: 'runningBalance',
    maxWidth: 130,
    className: 'currency-field',
    Cell: props => <span className={props.value != 0 ? (props.value < 0 ? 'amount amount-negative':'amount amount-positive') : 'amount amount-neutral'}>
        ${((props.value*100)/100).toFixed(2)}
    </span>
}];
/**
 * Display all transactions in a dynamic, customizable, filterable table. 
 */
class Feed extends Component {

    constructor(props) {
        super(props);
        this.state = {
            transactions:[],
            columns:[]
        };
        this.isEmpty = this.isEmpty.bind(this);
        this.dismissCategory = this.dismissCategory.bind(this);
    }

    componentDidMount() {
        if(!this.isEmpty(this.props.transactions)) {
            let columns = [];
            allColumns.map(item => {
                if(this.props.filters.columns.has(item.accessor)) {
                    columns.push(item);
                }
            });
            this.setState({
                transactions:this.props.transactions,
                columns:columns
            })
        }
    }

    componentWillReceiveProps(nextProps, prevState) {
        if(!this.isEmpty(nextProps.transactions)) {
            let columns = [];
            allColumns.map(item => {
                if(nextProps.filters.columns.has(item.accessor)) {
                    columns.push(item);
                }
            });
            this.setState({
                transactions:nextProps.transactions,
                columns:columns
            });
        }
    }

    isEmpty(obj) {
        return obj == undefined || (Array.isArray(obj) && obj.length == 0);
    }

    /**
     * Dismiss a category that is currently being filtered.
     * @param {*} e onClick event
     */
    dismissCategory(e) {
        let id = e.target.parentElement.dataset.id; //anchor tag
        let replacement = new Set;
        for(let tag of this.props.filters.categories) {
            replacement.add(tag);
        }
        replacement.delete(id);
        let filters = {
            accounts:this.props.filters.accounts,
            categories:replacement,
            columns:this.props.filters.columns,
            dates:this.props.filters.dates
        };
        this.props.onFilterChange(filters);
    }

    render() {
        let categories = [];
        for(let c of this.props.filters.categories) { //render category filter tags
            categories.push(
                <span className="label label-primary category-tag" key={'feed-tag-category-'+c}>{c}
                <a onClick={this.dismissCategory} data-id={c} style={{color:"white"}}>
                    <i className="remove glyphicon glyphicon-remove-sign glyphicon-white"></i></a>
                </span>
            );
        }
        return (
            <div className="panel dashboard-section">
                <div className="panel-heading">
                    <h3>Activity</h3>
                </div>
                <div className="panel-body">
                    <div className="row feed-summary">
                        <div className="col-lg-8">
                            <span className="control-label">Categories:</span> 
                            {this.props.filters.categories.size != 0 ? 
                                categories : <span className="label label-default">No selected categories</span>}
                        </div>
                        <div className="col-lg-4 date-display">
                            <span className="control-label">From:</span>
                            <span>{this.props.filters.dates.start != '' ? this.props.filters.dates.start : 'all time'}</span>
                            &nbsp;
                            <span className="control-label">To: </span>
                            <span>{this.props.filters.dates.end != '' ? this.props.filters.dates.end:dateFormat(new Date(), 'yyyy-mm-dd') } </span>
                        </div>
                    </div>
                    <hr/>
                    <ReactTable data={this.props.transactions}
                                noDataText="No data to show."
                                columns={this.state.columns}
                                className="-striped -higlight"/>
                </div>
            </div>
        );
    }
}

export default Feed;