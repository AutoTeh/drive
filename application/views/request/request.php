<?PHP
defined('BASEPATH') OR exit('No direct script access allowed');
echo form_open('add/request/1');
?>

<label for="DateSubmission ">���� �������</label>
<input type="date" name="dateSubmission" value="<?php echo set_value('dateSubmission'); ?>" />
<?php echo form_error('dateSubmission'); ?></br>

<label for="TimeBegin ">�����</label>
<input type="time" name="timeBegin" value="<?php echo set_value('timeBegin'); ?>" />
<?php echo form_error('timeBegin'); ?></br>

<label for="TimeEnd">����� �������</label>
<input type="time" name="timeEnd" value="<?php echo set_value('timeEnd'); ?>" />
<?php echo form_error('timeEnd'); ?></br>

<div><input type="submit" value="�����" /></div>
</form>