import React, { Component } from 'react';
import './css/ticker.css';

/**
 * Running balance across all accounts and currently filtered.
 */
class Ticker extends Component {

    constructor(props) {
        super(props);
        this.state = {
            amount:0,
            rows:0
        };
        this.calculate = this.calculate.bind(this);
    }

    componentDidMount() {
        if(this.props.processed != undefined) {
            this.setState({
                amount:this.calculate(this.props.processed),
                rows:this.props.processed.length
            });
        }
    }

    componentWillReceiveProps(nextProps, prevState) {
        if(nextProps.processed != undefined) {
            this.setState({
                amount: this.calculate(nextProps.processed),
                rows: nextProps.processed.length
            });
        }
    }

    calculate(processed) {
        let total = 0;
        processed.map(transaction => {
            total+=transaction.amount;
        });
        return total;
    }

    render() {
        return (
            <div className="ticker-container">
                <span>calculated balance </span>
                <span className={this.state.amount < 0 ? 'amount amount-negative':'amount amount-positive'}>
                    ${((this.state.amount*100)/100).toFixed(2)}&nbsp;
                </span>
                <span># of transactions </span>
                <span className="amount">{this.state.rows}</span>
            </div>
        );
    }
}

export default Ticker;
