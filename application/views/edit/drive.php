<?PHP
defined('BASEPATH') OR exit('No direct script access allowed');
echo form_open('add/drive');
?>

<label for="Fio">���</label>
<input type="text" name="fio" value="<?php echo $fio ?>" placeholder = "������� ��� ��������"/>
<?php echo form_error('fio'); ?></br>

<label for="Phone">�������</label>
<input type="text" name="phone" value="<?php echo $phone ?>" placeholder = "������� ��� �������"/>
<?php echo form_error('phone'); ?></br>

<label for="AddCar">�������� ������ ������������ �� ���</label>
<?PHP echo form_dropdown('addCar', $AllCar, $addCar')); ?>
<?php echo form_error('addCar'); ?></br>

<div><input type="submit" value="��������" /></div>
</form>