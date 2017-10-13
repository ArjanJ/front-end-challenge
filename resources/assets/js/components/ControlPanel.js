import React, { Component } from 'react';
import FilterList from './Filter/FilterList';
import {Typeahead} from 'react-bootstrap-typeahead';
import './css/control-panel.css';
/**
 * Side located control panel that shows category and account options.
 */
class ControlPanel extends Component {

    constructor(props) {
        super(props); //don't actually need state probably
        this.state = {
            accounts:[],
            categories:[],
            columns:[{
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
            }],
            accountFilter: new Set, //actual accounts and categories as props
            categoryFilter: new Set,
            columnFilter: new Set
        };
        this.process = this.process.bind(this);
        this.handleSelectChange = this.handleSelectChange.bind(this);
        this.handleTypeahead = this.handleTypeahead.bind(this);
        this.resetFilters = this.resetFilters.bind(this);
    }

    componentDidMount() {
        this.setState({
            accounts:this.process(this.props.accounts, 'accountName', 'institutionName', 'accountId'),
            categories:this.props.categories,
            columns:this.process(this.state.columns, 'Header', null, 'accessor'),
            columnFilter:this.props.filters.columns
        });
    }

    componentWillReceiveProps(nextProps, prevState) {
        this.setState({
            accounts:this.process(nextProps.accounts, 'accountName', 'institutionName', 'accountId'),
            categories:this.process(nextProps.categories, null, null, null),
            accountFilter:nextProps.filters.accounts,
            categoryFilter:nextProps.filters.categories,
            columnfilter:nextProps.filters.categories
        });
    }

    handleSelectChange(type, selected) {
        switch(type) {
            case 'accounts':
                this.props.onFilterChange({
                    accounts:selected,
                    columns:this.state.columnFilter,
                    categories:this.state.categoryFilter
                });
                this.setState({accountFilter:selected});
                break;
            case 'columns':
                this.props.onFilterChange({
                    accounts:this.state.accountFilter,
                    columns:selected,
                    categories:this.state.categoryFilter
                });
                this.setState({columnFilter:selected});
                break;
            case 'category':
                this.props.onFilterChange({
                    accounts:this.state.accountFilter,
                    columns:this.state.columnFilter,
                    categories:selected
                });
                this.setState({categoryFilter:selected});
                break;
            default:
                break;
        }

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
        console.log('resetting');
        this.props.onFilterChange({
            categories: new Set(),
            accounts: new Set(),
            columns: this.props.defaultColumns
        });
    }

    render() {
        return (
            <div className="panel">
                <div className="panel-heading">
                    <h3>Control Panel</h3>
                    <button className="btn btn-sm btn-danger" id="clear-filters-btn" onClick={this.resetFilters}>Clear</button></div>
                <div className="panel-body">
                    <div className="list-group">
                        <div className="list-group-heading">Categories</div>
                        <div>
                            <Typeahead options={this.props.categories}
                                       maxResults={5}
                                       onChange={this.handleTypeahead}
                                       submitFormOnEnter={true}/>
                        </div>
                        <br/>
                        <a className="list-group-heading" data-toggle="collapse" href="#accounts-filter-collapse">Accounts</a>

                        <div className="collapse in" id="accounts-filter-collapse">
                            <FilterList type="accounts"
                                        data={this.state.accounts}
                                        selected={this.state.accountFilter}
                                        multi={false}
                                        onSelected={this.handleSelectChange}/>
                        </div>
                        <br/>
                        <a className="list-group-heading" data-toggle="collapse" href="#columns-filter-collapse">Display options</a>
                        <div className="collapse" id="columns-filter-collapse">
                            <FilterList type="columns"
                                        data={this.state.columns}
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
