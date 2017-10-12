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
            categories:[], //unlikely to change
            accounts:[],   //unlikely to change
            transactions:[] //likely to change
        };
    }

    /**
     * Entry point for data to the app.
     */
    componentDidMount() {
        fetch('http://demo7235469.mockable.io/transactions')
            .then(response => {
                return response.json();
            })
            .then(response => {
                this.setState({
                    categories:response['categories'],
                    accounts:response['accounts'],
                    transactions:response['transactionData']
                });
            });
    }

    render() {
        return (
            <div>
                <Navigation/>
                <div className="container">
                    <div className="row">
                        <div className="col-lg-3">
                            <ControlPanel />
                        </div>
                        <div className="col-lg-9">
                            <Feed />
                        </div>
                    </div>
                </div>
            </div>);
    }
}

export default Dashboard;

if (document.getElementById('react-dashboard-entry')) {
    ReactDOM.render( <Dashboard/>, document.getElementById('react-dashboard-entry'));
}