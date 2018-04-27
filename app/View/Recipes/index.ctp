<h2>レシピ一覧</h2>

<table>
<tr>
<th>ID</th>
<th>メニュー</th>
<th>追加日</th>
</tr>


<?php foreach ($recipes as $recipe): ?>
<tr>
<td><?php echo $recipe['Recipe']['id']; ?></td>
<td><?php echo $recipe['Recipe']['menu']; ?></td>
<td><?php echo $recipe['Recipe']['created']; ?></td>
</tr>
<?php endforeach; ?>

<!--
<tr>
<td><?php echo $recipes['Recipe']['id']; ?></td>
<td><?php echo $recipes['Recipe']['menu']; ?></td>
<td><?php echo $recipes['Recipe']['created']; ?></td>
</tr>
-->
</table>
