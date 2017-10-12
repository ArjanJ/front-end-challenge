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
        return (<div>
            <Transaction />
        </div>);
    }
}

export default Feed;
