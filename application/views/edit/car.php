<?PHP
defined('BASEPATH') OR exit('No direct script access allowed');
echo form_open('add/car');
?>

<label for="Marka">�����</label>
<input type="text" name="marka" value="<?php echo $marka ?>" placeholder = "������� ����� ������"/>
<?php echo form_error('marka'); ?></br>

<label for="Passengers">����� ����������</label>
<input type="text" name="passengers" value="<?php echo $passengers ?>" placeholder = "������� ����� ���������� �������� � ������"/>
<?php echo form_error('passengers'); ?></br>

<label for="GosNum">���. �����</label>
<input type="text" name="gosNum" value="<?php echo $gosNum ?>" placeholder = "������� ���. ����� ������"/>
<?php echo form_error('gosNum'); ?></br>

<label for="Color">����</label>
<input type="text" name="color" value="<?php echo $color ?>" placeholder = "������� ���� ������"/>
<?php echo form_error('color'); ?></br>

<label for="TypeCar">�������� ��� ������</label>
<?PHP echo form_dropdown('typeCar', $AllCar, $typeCar); ?>
<?php echo form_error('typeCar'); ?></br>

<div><input type="submit" value="��������" /></div>
</form>