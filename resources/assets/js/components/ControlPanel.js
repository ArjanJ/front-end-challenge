import React, { Component } from 'react';
import FilterList from './Filter/FilterList';
import {Typeahead} from 'react-bootstrap-typeahead';
import './css/control-panel.css';
import * as validation from '../scripts/validation';
/**
 * Side located control panel that shows category and account options.
 */
class ControlPanel extends Component {

    constructor(props) {
        super(props); //don't actually need state probably
        this.state = {
            accountFilter: new Set, //actual accounts and categories as props
            categoryFilter: new Set,
            columnFilter: new Set,
            dateFilter: {start:'', end:''}
        };
        this.process = this.process.bind(this);
        this.handleSelectChange = this.handleSelectChange.bind(this);
        this.handleTypeahead = this.handleTypeahead.bind(this);
        this.resetFilters = this.resetFilters.bind(this);
        this.handleDateFilter = this.handleDateFilter.bind(this);
        this.columns = this.process([{
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
        }, {
            Header: 'Withdrawal',
            accessor: 'withdrawal'
        }, {
            Header: 'Deposit',
            accessor: 'deposit',
        }, {
            Header: 'Running Balance',
            accessor: 'runningBalance'
        }], 'Header',null,'accessor');
    }

    componentDidMount() {
        this.setState({
            columnFilter:this.props.filters.columns
        });
    }

    componentWillReceiveProps(nextProps, prevState) {
        this.setState({
            accountFilter:nextProps.filters.accounts,
            categoryFilter:nextProps.filters.categories,
            columnfilter:nextProps.filters.columns,
            dateFilter:nextProps.filters.dates
        });
    }

    handleSelectChange(type, selected) {
        let filters = {
            accounts:this.state.accountFilter,
            columns:this.state.columnFilter,
            categories:this.state.categoryFilter,
            dates:this.state.dateFilter
        };
        switch(type) {
            case 'accounts':
                filters.accounts = selected;
                this.setState({accountFilter:selected});
                break;
            case 'columns':
                filters.columns = selected;
                this.setState({columnFilter:selected});
                break;
            case 'category':
                filters.categories = selected;
                this.setState({categoryFilter:selected});
                break;
            case 'dates':
                filters.dates = selected;
                this.setState({dateFilter:selected});
                break;
        }
        this.props.onFilterChange(filters);
    }

    handleDateFilter(e) {
        if(e.target.value != undefined) {
            let dateArray = e.target.value.split('-');
            let dateFilter = {
                start:this.state.dateFilter.start,
                end:this.state.dateFilter.end
            };
            if(e.target.id == 'start-date') {
                if(validation.isValidDateOrder(e.target.value,dateFilter.end)) {
                    dateFilter.start = e.target.value;
                    this.handleSelectChange('dates', dateFilter);
                }
            } else {
                if(validation.isValidDateOrder(dateFilter.start, e.target.value)) {
                    dateFilter.end = e.target.value;
                    this.handleSelectChange('dates', dateFilter);
                }
            }
        }
        //TODO alert message if incorrect
    }

    /**
     * Submitting tags
     * @param e     Array of values entered
     */
    handleTypeahead(e) {
        if(e[0] != undefined) {
            let typeaheads = new Set();
            for(let filter of this.state.categoryFilter) {
                typeaheads.add(filter);
            }
            typeaheads.add(e[0]);
            this.handleSelectChange('category', typeaheads);
            this.refs.typeahead.getInstance().clear();
        }
    }

    /**
     * Process data that should be filterable.
     * @param raw       raw data of type Object
     * @param title     name of the object attribute => title of filterable item
     * @param subtitle  (optional) name of the object attribute => subtitle of filterable item
     * @param id        name of the object attribute => ID of filterable item
     * @returns {Array} of usable data for filtering
     */
    process(raw, title, subtitle, id) {
        let data = [];
        if(raw != undefined) {
            for(let item of raw) {
                let temp = {};
                temp.title = item[title];
                temp.subtitle = (subtitle != undefined) ? item[subtitle] : '';
                temp.id = item[id];
                data.push(temp);
            }
        }
        return data;
    }

    /**
     * Clear the filters to default settings.
     * @param e
     */
    resetFilters(e) {
        this.props.onFilterChange({
            categories: new Set(),
            accounts: new Set(),
            columns: this.props.defaultColumns,
            dates:{start:'', end:''}
        });
    }

    render() {
        return (
            <div className="panel dashboard-section control-panel">
                <div className="panel-heading">
                    <h3>Filter Options</h3>
                    <button className="btn btn-sm btn-default" id="clear-filters-btn" onClick={this.resetFilters}>Reset</button></div>
                <div className="panel-body">
                    <div className="list-group">
                        <a data-toggle="collapse" className="list-group-item filter-types" href="#category-filter-collapse">Categories</a>
                        <div className="collapse in" id="category-filter-collapse">
                            <Typeahead multiple
                                       options={this.props.categories}
                                       maxResults={5}
                                       placeholder="Filter by categories"
                                       onChange={this.handleTypeahead}
                                       submitFormOnEnter={true}
                                       selected={Array.from(this.state.categoryFilter)}
                                       ref="typeahead"/>
                            <br/>
                        </div>
                        <a data-toggle="collapse" className="list-group-item filter-types" href="#date-filter-collapse">Dates</a>
                        <div className="collapse in" id="date-filter-collapse">
                            <div className="form-group form-inline">
                                <label className="control-label control-panel">Start</label>
                                <input type="date" name="start-date" className="form-control input-sm"
                                       value={this.state.dateFilter.start}
                                       id="start-date" onChange={this.handleDateFilter}/>
                            </div>
                            <div className="form-group form-inline">
                                <label className="control-label control-panel">End</label>
                                <input type="date" name="end-date" className="form-control input-sm"
                                       value={this.state.dateFilter.end}
                                       id="end-date" onChange={this.handleDateFilter}/>
                            </div>
                        </div>
                        <a className="list-group-item filter-types" data-toggle="collapse" href="#accounts-filter-collapse">Accounts</a>
                        <div className="collapse in" id="accounts-filter-collapse">
                            <FilterList type="accounts"
                                        data={this.process(this.props.accounts, 'accountName', 'institutionName', 'accountId')}
                                        selected={this.state.accountFilter}
                                        multi={false}
                                        onSelected={this.handleSelectChange}/>
                        </div>
                        <a className="list-group-item filter-types" data-toggle="collapse" href="#columns-filter-collapse">Display options</a>
                        <div className="collapse" id="columns-filter-collapse">
                            <FilterList type="columns"
                                        data={this.columns}
                                        selected={this.state.columnFilter}
                                        multi={true}
                                        onSelected={this.handleSelectChange}/>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default ControlPanel;
