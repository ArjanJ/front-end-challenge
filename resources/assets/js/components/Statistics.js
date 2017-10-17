import React, { Component } from 'react';
import Chart from 'chart.js';
/**
 * Top bar, mainly for aesthetics but potentially to intro actual nav.
 */
class Statistics extends Component {

    constructor(props) {
        super(props);
    }

    render() {
        //var myChart = new Chart(ctx, {...});
        return (
            <div className="panel">
                <div className="panel-heading">
                    <h3>Statistics</h3>
                </div>
                <div className="panel-body">
                    <div id="doughnut"></div>
                </div>
            </div>
        );
    }
}

export default Statistics;
