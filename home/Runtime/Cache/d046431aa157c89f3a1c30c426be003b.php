<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>

		<!--<?php if(is_array($qhddata)): foreach($qhddata as $key=>$v): echo ($v["CD"]); ?><br><?php endforeach; endif; ?>-->
              <!-- <?php echo (date('Y-m-d g:i a',time())); ?><br>
                <?php echo (THINK_VERSION); ?><br>
                <?php if(strlen($str) > 10): echo (md_sudstr($str, 0,2,'utf-8')); ?>...
                    <?php else: ?>
                    <?php echo ($str); endif; ?>
                <?php echo (date('YMDH:i:s',$now)); ?><br>
                <?php echo (($data)?($data): 'no data'); ?><br>
                <?php echo ($a/$b); ?><br>-->
              
              <table width='80%' align="center" border="1" cellpadding="5" cellspacing="0">
              <tr>
              	<td colspan="3"><a href="#">浏览</a>|<a href="#">添加</a></td>
              </tr>
              	<tr>
              		<th>id</th>
              		<th>产地</th>
              		<th>操作</th>
              	</tr>

              	<?php if($re != NULL): if(is_array($re)): foreach($re as $key=>$value): ?><tr>
              				<td>
              					<?php echo ($value["ID"]); ?></td>
              					<td>
              						<?php echo ($value["CD"]); ?></td>
              						<td><a href="__APP__/?m=index&a=delete&id=<?php echo ($value["ID"]); ?>">刪除</a>|<a href="#">修改</a></td>
              					</tr><?php endforeach; endif; ?>
              				<?php else: ?>              
              				<tr>
              					<td colspan="3">
              						<?php echo (($re)?($re):'数据库没有数据'); ?></td>
              					</tr><?php endif; ?>
              			</table>
              

</html>