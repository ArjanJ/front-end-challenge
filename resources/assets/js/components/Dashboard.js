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
        let columnFilters = new Set();
        columnFilters.add('transactionDate').add('description').add('amount').add('category'); //default columns
        this.state = {
            categories:[], //unlikely to change
            accounts:[],   //unlikely to change
            transactions:[], //likely to change,
            filters:{
                categories:new Set,
                columns:columnFilters,
                accounts:new Set
            },//currently being filtered
            defaultColumns:columnFilters
        };
        this.handleFilterChange = this.handleFilterChange.bind(this);
    }

    /**
     * Entry point for data to the app.
     */
    componentDidMount() {
        fetch('/api/transactions')
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

    /**
     * Passes the filtered types to the correct location
     * @param e {type, filtered}
     */
    handleFilterChange(e) {
        this.setState({
            filters:e
        });
    }

    render() {
        return (
            <div>
                <Navigation/>
                <div className="container">
                    <div className="row">
                        <div className="col-lg-3">
                            <ControlPanel categories={this.state.categories}
                                          accounts={this.state.accounts}
                                          filters={this.state.filters}
                                          defaultColumns={this.state.defaultColumns}
                                          onFilterChange={this.handleFilterChange}/>
                        </div>
                        <div className="col-lg-9">
                            <Feed transactions={this.state.transactions}
                                  filters={this.state.filters}
                                  onFilterChange={this.handleFilterChange}
                            />
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