<?PHP
defined('BASEPATH') OR exit('No direct script access allowed');
echo form_open('add/car');
?>

<label for="Marka">�����</label>
<input type="text" name="marka" value="<?php echo set_value('marka'); ?>" placeholder = "������� ����� ������"/>
<?php echo form_error('marka'); ?></br>

<label for="Passengers">����� ����������</label>
<input type="text" name="passengers" value="<?php echo set_value('passengers'); ?>" placeholder = "������� ����� ���������� �������� � ������"/>
<?php echo form_error('passengers'); ?></br>

<label for="Gos_Num">���. �����</label>
<input type="text" name="gos_Num" value="<?php echo set_value('gos_Num'); ?>" placeholder = "������� ���. ����� ������"/>
<?php echo form_error('gos_Num'); ?></br>

<label for="Color">����</label>
<input type="text" name="color" value="<?php echo set_value('color'); ?>" placeholder = "������� ���� ������"/>
<?php echo form_error('color'); ?></br>

<label for="TypeCar">�������� ��� ������</label>
<?PHP echo form_dropdown('typeCar', $AllCar); ?>
<?php echo form_error('typeCar'); ?></br>

<div><input type="submit" value="��������" /></div>
</form>