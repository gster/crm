#功能点分配
##session里放username
##login
login.action
5个跳转：
###error->login.jsp
    errormsg在request里
###worker->index_a.html 
####geren\xinjiankeyan.html
    初始化->xinjianxiangmu_init.action,param:id;return:form项map集合
    提交 ->xinjianxiangmu.action form项

####geren\keyanxiangmu.html
      keyanxiangmulist.action:params:page,pagenum
      return:items{id,xiangmumingchen;xiangmuleixing;shenqingshijian;zhuangtai;caozuo},itemscount:num

      修改->xinjiankeyan.jsp?id=

####个人信息->gerenxinxi.html
    gerenxinxi_init.action
    gerenxinxi.action
####密码修改->mimaxiugai.action,mima_xg.html


###company->index_b.html
####ky_list\ky_list_r.html
    ky_list_r.action: 
    params:page,pagenum
    return:items{id,xiangmumingchen(url拼接);xiangmuleixing;shenqingshijian;shengqingren;zhuangtai},itemscount:num
####yulan_r.html
    review_pass.action    // 人员不同，方式不同
    review_refuse.action

####xm_search_r.html
    xmsearch.action
    param:mingcheng,leibie,qishishijian,jieshushijan
    return:跟上面的一致

####use_xg_r.html(单位信息修改)
初始化load
    use_xg_r_init.action
保持操作
    use_xg_r.action 

####pers_gl_r.html(人员列表)
    pers_gl_r.action
    params:page,pagenum
    return:items:[id,xingming,xingbie,chushengnianyue,xueli,zhicheng,zhuangtai],itemscount:num

通过: 
    userpass.action,param:id,return:true/false
删除: 
    userdelete.action,param:id,return;true/false 

###leader->index_c.html
#### pingshen/fenpei_list.html
    分页参考:ky_list_r  
      fenpei_list.action
#### pszj_fenpei.html
      pszj_fenpei.action: parem: page,pagenum
    	returns:items[id,xiangmumingcheng,xiangmleixing,shenqingshijian,zhuangtai],itemscount:num
####fengpei_zj.html
页面里面有个：项目id，
初始化：
    fenpei_zj_pre.action, param:xiangmuid,return:nexperts[id,name],experts[id,name]
两个ajax：
    addexperts.action   param:{xiangmuid,zhuangjianid},return:true/false
    removeexperts.action   param:{xiangmuid,zhuangjianid},return:true/false

####pass_ps.html
    pass_ps.action: param:{page,pagenum},return: items[id，项目名称，单位，得分]，itemscount:num
    评审专家信息->zhuangjia_mess.html、评审数据->fingshen_sj.html
####密码修改
    mimaxiugai.action->mima_xg.html
####专家管理-专家列表---前端修改(todo)

###expert->index_d.html
####weipingshen.html
    weipingshen.action:param:{page,pagenum},return: items[id，项目名称，类型，时间,操作]，itemscount:num
操作->弹出新标签页；
####yipingshen.html
    yipingshen.action:param:{page,pagenum},return: items[id，项目名称（url），类型，时间,得分]，itemscount:num
####个人信息修改删除掉
####密码修改->mimaxiugai.action->mima_xg.html

##zc_pt_info.html->个人注册页面
    loadcompany.action:return: items[id，companyname]
    gerenzhuce.action:将信息插入库

##zc_zj_info.html->专家注册页面
    zhuangjiazhuce.action:信息插入库，跳转到登陆页面

