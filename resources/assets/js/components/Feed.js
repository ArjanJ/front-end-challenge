import React, { Component } from 'react';
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
            columns:defaultColumns
        };
        this.isEmpty = this.isEmpty.bind(this);
    }

    componentDidMount() {
        if(!this.isEmpty(this.props.transactions)) {
            this.setState({
                transactions:this.props.transactions.transactions
            })
        }
    }

    componentWillReceiveProps(nextProps, prevState) {
        if(!this.isEmpty(nextProps.transactions)) {
            this.setState({
                transactions:nextProps.transactions.transactions
            })
        }
    }

    isEmpty(obj) {
        return obj == undefined || (Array.isArray(obj) && obj.length == 0);
    }

    render() {
        return (
            <div className="panel">
                <div className="panel-heading">
                    <h3>Transactions</h3>
                    <div>Tags go here</div>
                    <hr/>
                </div>
                <div className="panel-body">
                    {!this.isEmpty(this.state.transactions) &&
                        <ReactTable data={this.state.transactions}
                                    columns={this.state.columns}
                                    filterable={true}/>}
                </div>
            </div>
        );
    }
}

export default Feed;
