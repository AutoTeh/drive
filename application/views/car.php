<?PHP
defined('BASEPATH') OR exit('No direct script access allowed');
echo form_open($url_form);
?>

<label for="Marka">�����</label>
<input type="text" name="marka" value="<?php echo set_value('marka', $Marka); ?>" placeholder = "������� ����� ������"/>
<?php echo form_error('marka'); ?></br>

<label for="Passengers">����� ����������</label>
<input type="text" name="passengers" value="<?php echo set_value('passengers', $Passengers); ?>" placeholder = "������� ����� ���������� �������� � ������"/>
<?php echo form_error('passengers'); ?></br>

<label for="GosNum">���. �����</label>
<input type="text" name="gosNum" value="<?php echo set_value('gosNum', $Gos_Num); ?>" placeholder = "������� ���. ����� ������"/>
<?php echo form_error('gosNum'); ?></br>

<label for="Color">����</label>
<input type="text" name="color" value="<?php echo set_value('color', $Color); ?>" placeholder = "������� ���� ������"/>
<?php echo form_error('color'); ?></br>

<label for="TypeCar">�������� ��� ������</label>
<?PHP echo form_dropdown('typeCar', $AllCar, set_value('typeCar', $Type_Car)); ?>
<?php echo form_error('typeCar'); ?></br>

<div><input type="submit" value="���������" /></div>
</form>