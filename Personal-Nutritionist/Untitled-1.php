<label>Day</label><br>
<select  onchange="changeTime(this);">
  <option value="today">Today</option>
  <option value="tomorrow">Tomorrow</option>
</select>
<br>
<br>
<label>Time</label>
<div class="select-wrapper">
    <select class="form-control today" id="" name="" required>
        <option value="0" selected>ASAP</option>
        <?php
        $initial = strtotime(date('H', time()) . ':00:00');
        for (; $initial < strtotime("23:59:59");  $initial = strtotime("+30 minutes", $initial)) {
          echo '<option value='. date('H:i', $initial) .'>'. date('H:i', $initial).'</option>';
        }
        ?>
    </select>
</div>
<div class="select-wrapper">
    <select class="form-control tomorrow" id="" name="" required style="display:none;">
        <option value="0" selected>ASAP</option>
        <?php
        $initial = strtotime('12:00:00');
        for (; $initial < strtotime("23:59:59");  $initial = strtotime("+30 minutes", $initial)) {
          echo '<option value='. date('H:i', $initial) .'>'. date('H:i', $initial).'</option>';
        }
        ?>
    </select>
</div>

<script type="text/javascript">
   function changeTime (obj)
   {
     if(obj.value == 'today') {
        document.getElementsByClassName('today')[0].style.display='block';
        document.getElementsByClassName('tomorrow')[0].style.display='none';
     }
     else{
      document.getElementsByClassName('tomorrow')[0].style.display='block';
      document.getElementsByClassName('today')[0].style.display='none';
     }
   }
</script>