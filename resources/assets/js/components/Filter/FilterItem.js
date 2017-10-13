import React, { Component } from 'react';
import './filter-item.css';
/**
 * Holds all transactions and filters them as needed.
 */
class FilterItem extends Component {

    /**
     * data:{title, subtitle, id}
     * @param props
     */
    constructor(props) {
        super(props);
        this.state = {
            selected:false
        };
        this.handleChange = this.handleChange.bind(this);
    }

    componentDidMount() {
        this.setState({
            selected:this.props.selected
        });
    }

    componentWillReceiveProps(nextProps, prevState) {
        if(nextProps.selected != prevState.selected) {
            this.setState({
                selected: nextProps.selected
            });
        }
    }

    handleChange(e) {
        let change = (!this.state.selected);
        this.setState({selected:change}, this.props.onSelected(this.props.data, change));
    }

    render() {
        let data = this.props.data;
        return (
            <div className="form-check">
                <button className={this.state.selected ? 'btn-filter-item btn-success':'btn-filter-item' } onClick={this.handleChange}>
                    <h6>{data.title}<br/>{data.subtitle != '' ? <span>{data.subtitle}</span> : null}</h6>
                </button>
            </div>
        );
    }
}

export default FilterItem;
