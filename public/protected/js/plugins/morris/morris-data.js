// Morris.js Charts sample data for SB Admin template

$(function() {

    // Area Chart
    Morris.Area({
        element: 'morris-area-chart',
        data: [{
            period: '2010',
            shimano: 8666,
            scorpion: 4000,
            lesath: 9647
        }, {
            period: '2011',
            shimano: 2778,
            scorpion: 2294,
            lesath: 2441
        }, {
            period: '2012',
            shimano: 3778,
            scorpion: 1394,
            lesath: 4341
        }, {
            period: '2013',
            shimano: 5778,
            scorpion: 4394,
            lesath: 2341
        }, {
            period: '2014',
            shimano: 7778,
            scorpion: 9394,
            lesath: 4341
        }, {
            period: '2015',
            shimano: 9778,
            scorpion: 8394,
            lesath: 7341
        }],
        xkey: 'period',
        ykeys: ['shimano', 'scorpion', 'lesath'],
        labels: ['Shimano', 'Scorpion', 'Lesath'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
    });

    Morris.Donut({
      element: 'morris-donut-chart',
      data: [
        {label: "Download Sales", value: 12},
        {label: "In-Store Sales", value: 30},
        {label: "Mail-Order Sales", value: 20}
      ]
    });
});
