<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Probe Log'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Probes'), ['controller' => 'Probes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Probe'), ['controller' => 'Probes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div id="content" class="probeLogs index large-9 medium-8 columns content">
    <h3><?= __('Probe Logs') ?></h3>
<?php 
$labels = [];
$data2 = [];
$count = 0;
foreach ($probeLogs as $probeLog)
{
if ($count == 5){
    array_push($labels,  h($probeLog->Timestamp));
    array_push($data2,  h($probeLog->Value));
    $count=0;
}else{
//    array_push($labels, '');
    $count++;
}

//array_push($data2,  h($probeLog->Value));
}
$dataChart = [
    'labels' => $labels,
    'datasets' => [
                [
                'label' => "My First dataset",
                'fillColor' => "rgba(220,220,220,0.2)",
                'strokeColor' => "rgba(220,220,220,1)",
                'data' => $data2
            ]
]
];
                
echo $this->Chartjs->createChart([
    'Chart' => [
        'id' => 'myBarChart',
        'type' => 'line'
    ], 
    'Data' => $dataChart,
    'Options' => [
        'line' => [
            'scaleShowGridLines' => false
        ],
        'pointDot' => false,
        'responsive' => true
    ]
]);?>    
</div>
