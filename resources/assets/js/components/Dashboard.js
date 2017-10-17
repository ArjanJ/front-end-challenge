import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Navigation from './Navigation';
import ControlPanel from './ControlPanel';
import Feed from './Feed';
import Statistics from './Statistics';
import './css/dashboard.css';
/**
 * Consolidates a user's transaction history across all accounts.
 * Sorting, filtering for data digestion happens at this component.
 * Entry point for data.
 */
class Dashboard extends Component {

    constructor(props) {
        super(props);
        let columnFilters = new Set();
        columnFilters.add('transactionDate').add('description').add('amount').add('category').add('runningBalance'); //default columns
        this.state = {
            loading: true,
            categories:[], //unlikely to change
            accounts:[],   //unlikely to change
            transactions:[], //likely to change
            processed:[],
            filters:{
                categories:new Set,
                columns:columnFilters,
                accounts:new Set,
                dates:{start:'', end:''}
            },//currently being filtered
            defaultColumns:columnFilters
        };
        this.handleFilterChange = this.handleFilterChange.bind(this);
        this.filter = this.filter.bind(this);
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
                //doing all the underscore replacements once up front
                let cattransform = [];
                response['categories'].map(cat => {
                    cattransform.push(cat.replace(/_/g, " "));
                });
                let ttransform = [];
                response['transactionData']['transactions'].map(transaction => {
                    transaction.category = transaction.category != undefined ? transaction.category.replace(/_/g, " "):transaction.category;
                    ttransform.push(transaction);
                });
                this.setState({
                    categories:cattransform,
                    accounts:response['accounts'],
                    transactions:ttransform,
                    processed:this.filter(this.state.filters, ttransform)
                });
                setTimeout(() => this.setState({ loading: false }), 1000);
            });
    }

    /**
     * Passes the filtered types to the correct location
     * @param e {type, filtered}
     */
    handleFilterChange(e) {
        this.setState({
            filters:e,
            processed:this.filter(e, this.state.transactions)
        });
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
        let dates = filters.dates;
        if(accounts.size == 0 && categories.size == 0 && dates.end == '' && dates.start == '') { //no filters
            return transactions;
        }
        let filtered = transactions.filter(transaction => {
            for(let filter of Object.keys(this.state.filters)) {
                switch(filter) {
                    case 'accounts':
                        if(accounts.size != 0) {
                            return accounts.has(transaction.accountId);
                        }
                        break;
                    case 'categories':
                        if(categories.size != 0) {
                            return categories.has(transaction.category);
                        }
                        break;
                    case 'dates':
                        let startDate = new Date(dates.start);
                        let endDate = new Date(dates.end);
                        let transactionDate = new Date(transaction.transactionDate);
                        if(dates.start != '' && transactionDate < startDate) {
                            return false;
                        }
                        if(dates.end != '' && transactionDate > endDate) {
                            return false;
                        }
                        break;
                    default: //ignore columns filter
                        break;
                }
            }
            return true;
        });
        return filtered;
    }

    render() {
        return (
            <div>
                <Navigation/>
                <div className="container">
                    {this.state.loading ?
                        <div className="loader-spinner">
                            <img src="/images/Ellipsis.svg" alt="loader from https://loading.io/spinner/ellipsis'" title="https://loading.io/spinner/ellipsis'"/>
                        </div> :
                    <div className="row">
                        <div className="col-lg-3">
                            <ControlPanel categories={this.state.categories}
                                          accounts={this.state.accounts}
                                          filters={this.state.filters}
                                          defaultColumns={this.state.defaultColumns}
                                          onFilterChange={this.handleFilterChange}/>
                            <Statistics />
                        </div>
                        <div className="col-lg-9">
                            <Feed transactions={this.state.processed}
                                  filters={this.state.filters}
                                  onFilterChange={this.handleFilterChange}
                            />
                        </div>
                    </div>}
                </div>
            </div>);
    }
}

export default Dashboard;

if (document.getElementById('react-dashboard-entry')) {
    ReactDOM.render( <Dashboard/>, document.getElementById('react-dashboard-entry'));
}