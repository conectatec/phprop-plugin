	<script type="text/javascript">
		var data = [
		<?php 
		foreach ($props as $key => $prop){
			if ($key <>null){
			$defaultValue = $prop['values']['default'];
			$htmCheckbox = "";
			$translatedCheckbox = "";
			if($prop['isHTML']){
				$htmCheckbox = '<input type="checkbox" value="1" checked="checked"/>';
			} else {
				$htmCheckbox = '<input type="checkbox" value="1"/>';
				
			}
			
			if ($prop['isTranslated']){
				$translatedCheckbox = '<input type="checkbox" value="1" checked="checked"/>';
				
			} else {
				$translatedCheckbox = '<input type="checkbox" value="1" />';
				
			}
			
			
			echo "['$key', '$defaultValue', '$htmCheckbox', '$translatedCheckbox', '" . $html->link(__('Edit', true), array('controller' => 'phprops', 'action' => 'edit', $key, $prop['isHTML'], $prop['isTranslated']), array('target' => '_blank'))."   ".$html->link(__('Delete', true), array('controller' => 'phprops', 'action' => 'delete', $key),null,('Are you sure delete key '. $key.'?')) . "'],";
		} 
		}
		?>
		];
		nano(function() { phprop.table(data); });
	</script>


<div id="phprop-box">
	<div id="phprop-table"></div><br><br>
<?php echo $html->link(__('Update Keys', true), array('controller' => 'phprops', 'action' => 'index'));?>
<br><br><?php echo $html->link(__('Add Key', true), array('controller' => 'phprops', 'action' => 'add'), array('target' => '_blank'));?>
<br><br><?php echo $html->link(__('Config Languages', true), array('controller' => 'languagesphprops', 'action' => 'index'));?>

</div>		