<?php if (!defined('SHUIPF_VERSION')) exit(); ?>
<Admintemplate file="Common/Head"/>
<body class="J_scroll_fixed">
<div class="wrap J_check_wrap">
  <Admintemplate file="Common/Nav"/>
  <div class="h_a">教师编辑</div>
  <form action="{:U('edit')}" method="post" class="J_ajaxForm">
  <div class="table_full"> 
  <table width="100%"  class="table_form">
        <tr>
          <th width="120">教师名：</th>
          <td class="y-bg"><input type="text" name="teacher" value="{$teacher}" class="input" /></td>
        </tr>
        <tr>
          <th>点击量</th>
          <td class="y-bg"><input type="text" name="hits" value="{$hits}" class="input" /></td>
        </tr>
      </table>
  </div>
  <div class="">
      <div class="btn_wrap_pd">             
        <button class="btn btn_submit mr10 J_ajax_submit_btn" type="submit">提交</button>
        <input type="hidden" name="teacherid" value="{$teacherid}" />
 
      </div>
    </div>
  </form>
</div>
<script src="{$config_siteurl}statics/js/common.js?v"></script>
</body>
</html>