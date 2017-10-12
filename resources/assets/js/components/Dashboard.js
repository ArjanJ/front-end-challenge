import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Navigation from './Navigation';
import ControlPanel from './ControlPanel';
import Feed from './Feed';
/**
 * Consolidates a user's transaction history across all accounts.
 * Sorting, filtering for data digestion.
 */
class Dashboard extends Component {

    constructor(props) {
        super(props);
        this.state = {
            categories:[],
            accounts:[],
            transaction:[] //OG list
        };
    }

    componentDidMount() {
        //TODO GET request
    }
    componentDidUpdate() {
    }

    render() {
        return (
            <div className="container-fluid">
                <Navigation />
                <ControlPanel />
                <Feed />

            </div>);
    }
}

export default Dashboard;

if (document.getElementById('react-dashboard-entry')) {
    ReactDOM.render( <Dashboard/>, document.getElementById('react-dashboard-entry'));
}