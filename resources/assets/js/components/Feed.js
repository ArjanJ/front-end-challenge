import React, { Component } from 'react';
import Transaction from './Transaction';

/**
 * Holds all transactions and filters them as needed.
 */
class Feed extends Component {

    constructor(props) {
        super(props);
        this.state = {
            categories:[],
            accounts:[],
            transaction:[]
        };
    }

    componentDidMount() {
    }
    componentDidUpdate() {
    }

    render() {
        return (
            <div className="panel">
                <div className="panel-heading">
                    <h3>Transactions</h3>
                    <hr/>
                </div>
                <div className="panel-body">
                    <Transaction />

                </div>
            </div>
        );
    }
}

export default Feed;
