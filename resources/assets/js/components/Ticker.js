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
        this.setState({
            amount:this.calculate(this.props.processed),
            rows:this.props.processed.length
        });
    }

    componentWillReceiveProps(nextProps, prevState) {
        this.setState({
            amount:this.calculate(nextProps.processed),
            rows:nextProps.processed.length
        });
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
                <table className="table" id="ticker">
                    <thead><tr>
                        <th>bal</th><th>count</th>
                    </tr></thead>
                    <tbody><tr>
                        <td>{this.state.amount.toFixed(2)}</td>
                        <td>{this.state.rows}</td>
                    </tr></tbody>
                </table>
            </div>
        );
    }
}

export default Ticker;
