<div class="spanh2">Жанры</div>
<ul class="typesgames">
<?php
foreach ($types as $type) {
	//каждый пункт списка - ссылка на страницу с играми данного жанра
	//жанр указывается с помощью параметра в get запросе - type_id
	echo '<li class="typmenu'.$type->t_id.'">'.CHtml::link($type->t_name, array('games/list', 'type_id'=>$type->t_id)).'</li>';
}
?>
</ul>