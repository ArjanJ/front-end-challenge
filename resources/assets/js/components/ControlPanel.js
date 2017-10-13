import React, { Component } from 'react';
import FilterList from './Filter/FilterList';
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
        this.handleSubmit = this.handleSubmit.bind(this);
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
            categories:this.process(nextProps.categories, null, null, null)
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
            default:
                break;
        }

    }

    /**
     * Submitting tags
     * @param e
     */
    handleSubmit(e) {

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

    render() {
        //TODO make filter lists dropdowns
        return (
            <div className="panel">
                <div className="panel-heading"><h3>Control Panel</h3></div>
                <div className="panel-body">
                    <div className="list-group">
                        <div className="list-group-heading">Categories</div>
                        <div>
                            <input type="text" className="form-control" defaultValue="" onSubmit={this.handleSubmit}
                                   placeholder='Filter by category'/>
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
