<?php 
    echo $this->Html->script('https://www.gstatic.com/charts/loader.js',['block' => 'script']);
    $this->Html->scriptStart(['block' => true]);
    foreach ($probeLogs as $probeLog){
    ?>
    function drawLogScales() {
  var data = new google.visualization.DataTable();
   data.addColumn('datetime', 'x');
  data.addColumn('number', <?php echo "'".$probeLog->probe->Name ."'"; ?>);


  data.addRows([
<?php 
$count = 0;
foreach ($probeLogs as $probeLog)
{
$year = $probeLog->Timestamp->i18nFormat('yyyy');
    $month = $probeLog->Timestamp->i18nFormat('MM')-1;
    $day = $probeLog->Timestamp->i18nFormat('dd');
    $hour = $probeLog->Timestamp->i18nFormat('hh');
    $min = $probeLog->Timestamp->i18nFormat('mm');
    $gchartdatetime = $year.",".$month.",".$day.",".$hour.",".$min;
if ($count == 0){
    echo "[new Date(".$gchartdatetime ."),".h($probeLog->Value)."]";    
    $count++;
}else{
echo ",[new Date(".$gchartdatetime ."),".h($probeLog->Value)."]"; 
    }
}
 ?>])
  var options = {
    hAxis: {
      title: 'Time',
      logScale: true
    },
    vAxis: {
      title: 'Temp \u2103',
      logScale: false
    },
    colors: ['#a52714', '#097138']
  };

  var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
  chart.draw(data, options);
}



<?php 
    };
    ?>
  google.charts.load('current', {
  packages: ['corechart', 'line']});  
google.charts.setOnLoadCallback(drawLogScales);
  <?php
$this->Html->scriptEnd();
?>
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

<div class="probeLogs index large-9 medium-8 columns content">
    <h3><?= __('Probe Logs') ?></h3>
    <div id="chart_div"/>
</div>