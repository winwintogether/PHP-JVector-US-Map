var state="";var county_code="";function preg_quote(str){return(str+'').replace(/([\\\.\+\*\?\[\^\]\$\(\)\{\}\=\!\<\>\|\:])/g,"\\$1");}
function addslashes(str){return str;}
function initialUpdatestate(){console.log($("#state_name").html());$("#update_state_hyperlink").val($("#state_hyperlink").html());$("#update_state_tia").val($("#state_tia").html());$("#update_state_bcode").val($("#state_bcode").html());$("#update_state_note").val($("#state_note").html().replace(/\<br\>/g,'\n'));$("#update_state_contact").val($("#state_contact").html());$("#update_state_email").val($("#state_email").html());$("#update_state_phone").val($("#state_phone").html());$("#update_state_md").modal('show');};function initUpdateCTForm(id,other_id,bcode,tia,windspeed_f,special_locale,windspeed_local,name,note,contact,email,phone,flag){$("#update_ct_id").val(id);$("#update_ct_name").val(name);$("#update_ct_other_id").val(other_id);$("#update_ct_bcode").val(bcode);$("#update_ct_tia").val(tia);$("#update_ct_windspeed_f").val(windspeed_f);$("#update_ct_special_locale").val(special_locale);$("#update_ct_windspeed_local").val(windspeed_local);$("#update_ct_note").val(note.replace(/\<br\>/g,'\n'));$("#update_ct_email").val(email);$("#update_ct_phone").val(phone);$("#update_ct_contact").val(contact);$("#update_ct_md").modal('show');}
function getData(st,ct){$.ajax('api/getdata.php',{type:'POST',cache:false,dataType:'json',data:{state:st,ct_code:ct},success:function(data){console.log(data);state_name=data.state[0].name.toUpperCase();state_lastupdate=data.state[0].lastupdate;state_hyperlink=data.state[0].hyperlink==null?'':data.state[0].hyperlink;state_bcode=data.state[0].bcode==null?'':data.state[0].bcode;state_tia=data.state[0].tia==null?'':data.state[0].tia;state_note=data.state[0].note==null?'':data.state[0].note;state_contact=data.state[0].contact==null?'':data.state[0].contact;state_email=data.state[0].email==null?'':data.state[0].email;state_phone=data.state[0].phone==null?'':data.state[0].phone;$("#state").empty();$("#state").append("<div class='row custom-label'>"+"<div style='float:right; margin-right:20px' id='state_lastupdate'>"+state_lastupdate+"</div>"+"<div style='float:right; margin-right:20px'>Last Update: </div>"+"</div>"+"<div class='row'>"+"<div class='col-md-2 col-sm-2 custom-label'>State Name:</div>"+"<div class='col-md-10 col-sm-10' id='state_name'>"+state_name+"</div>"+"</div>"+"<div class='row'>"+"<div class='col-md-2 col-sm-2 custom-label'>Hyperlink:</div>"+"<div class='col-md-10 col-sm-10' id='state_hyperlink'>"+state_hyperlink+"</div>"+"</div>"+"<div class='row'>"+"<div class='col-md-2 col-sm-2 custom-label'>TIA_222:</div>"+"<div class='col-md-4 col-sm-4' id='state_tia'>"+state_tia+"</div>"+"<div class='col-md-3 col-sm-3 custom-label'>Building Code:</div>"+"<div class='col-md-3 col-sm-3' id='state_bcode'>"+state_bcode+"</div>"+"</div>"+"<div class='row'>"+"<div class='col-md-2 col-sm-2 custom-label'>Note:</div>"+"<div class='col-md-10 col-sm-10' id='state_note'>"+state_note+"</div>"+"</div>"+"<div class='row'>"+"<div class='col-md-2 col-sm-2 custom-label'>Contact:</div>"+"<div class='col-md-10 col-sm-10' id='state_contact'>"+state_contact+"</div>"+"</div>"+"<div class='row'>"+"<div class='col-md-2 col-sm-2 custom-label'>Email:</div>"+"<div class='col-md-4 col-sm-4' id='state_email'>"+state_email+"</div>"+"<div class='col-md-2 col-sm-2 custom-label'>Phone:</div>"+"<div class='col-md-4 col-sm-4' id='state_phone'>"+state_phone+"</div>"+"</div>"+"<a class='btn btn-link' style='float: right;' data-toggle='modal' onclick='initialUpdatestate()'>Update</a>");var ct_flag='0';var ct_type="#county_content";$("#city_tab").css("display","block");$("#county_tab").css("display","block");if(data.ctname.length>0){ct_flag=data.ctname[0].flag;$("#city_tab").css("display","none");$("#county_tab").css("display","block");if(ct_flag=='1'){ct_type="#city_content";$("#city_tab").css("display","block");$("#county_tab").css("display","none");}}
$("#county_content").empty();$("#city_content").empty();if(data.ct.length>0){$.each(data.ct,function(index,row){ct_id=row.id;ct_name=row.name==null?'':row.name;ct_ctname=row.ctname;ct_email=row.email==null?'':row.email;ct_bcode=row.bcode==null?'':row.bcode;ct_lastupdate=row.lastupdate;ct_note=row.note==null?'':row.note;ct_phone=row.phone==null?'':row.phone;ct_contact=row.contact==null?'':row.contact;ct_other_id=row.other_id==null?'':row.other_id;ct_tia=row.tia==null?'':row.tia;ct_windspeed_f=row.windspeed_f==null?'':row.windspeed_f;ct_special_locale=row.special_locale==null?'':row.special_locale;ct_windspeed_local=row.windspeed_local==null?'':row.windspeed_local;$(ct_type).append("<div style='padding-bottom: 10px; padding-top:10px; border-bottom: 1px solid #0f0;'>"+"<div class='row custom-label'>"+"<div style='float:right; margin-right:20px' id='ct_lastupdate'>"+state_lastupdate+"</div>"+"<div style='float:right; margin-right:20px'>Last Update: </div>"+"</div>"+"<div class='row'>"+"<div class='col-md-3 col-sm-3 custom-label'>Name:</div>"+"<div class='col-md-9 col-sm-9'>"+ct_name+"</div>"+"</div>"+"<div class='row'>"+"<div class='col-md-3 col-sm-3 custom-label'>Other_id:</div>"+"<div class='col-md-3 col-sm-3'>"+ct_other_id+"</div>"+"<div class='col-md-3 col-sm-3 custom-label'>Building Code:</div>"+"<div class='col-md-3 col-sm-3'>"+ct_bcode+"</div>"+"</div>"+"<div class='row'>"+"<div class='col-md-3 col-sm-3 custom-label'>TIA_222:</div>"+"<div class='col-md-9 col-sm-9'>"+ct_tia+"</div>"+"</div>"+"<div class='row'>"+"<div class='col-md-3 col-sm-3 custom-label'>Windspeed_f:</div>"+"<div class='col-md-9 col-sm-9'>"+ct_windspeed_f+"</div>"+"</div>"+"<div class='row'>"+"<div class='col-md-3 col-sm-3 custom-label'>Special_Locale:</div>"+"<div class='col-md-9 col-sm-9'>"+ct_special_locale+"</div>"+"</div>"+"<div class='row'>"+"<div class='col-md-3 col-sm-3 custom-label'>Windspeed_g_or_local:</div>"+"<div class='col-md-9 col-sm-9'>"+ct_windspeed_local+"</div>"+"</div>"+"<div class='row'>"+"<div class='col-md-3 col-sm-3 custom-label'>Note:</div>"+"<div class='col-md-9 col-sm-9'>"+ct_note+"</div>"+"</div>"+"<div class='row'>"+"<div class='col-md-3 col-sm-3 custom-label'>Contact:</div>"+"<div class='col-md-9 col-sm-9'>"+ct_contact+"</div>"+"</div>"+"<div class='row'>"+"<div class='col-md-3 col-sm-3 custom-label'>Phone:</div>"+"<div class='col-md-3 col-sm-3'>"+ct_phone+"</div>"+"<div class='col-md-3 col-sm-3 custom-label'>Email:</div>"+"<div class='col-md-3 col-sm-3' class='county_email'>"+ct_email+"</div>"+"</div>"+"<div class='row'>"+"<a  class='btn btn-link' style='float: right;' onclick=\"deletect('"+ct_id+"')\">Delete</a>"+"<a  class='btn btn-link' style='float: right;' onclick=\"initUpdateCTForm('"+
ct_id+"','"+ct_other_id+"','"+ct_bcode+"','"+ct_tia+"','"+
ct_windspeed_f+"','"+ct_special_locale+"','"+ct_windspeed_local+"','"+
ct_name+"','"+ct_note+"','"+ct_contact+"','"+ct_email+"','"+
ct_phone+"')\">Update</a>"+"</div>"+"</div>");});}},error:function(error){toastr["error"]("error!");}});}
function insertData(ct)
{$.ajax('api/insertdata.php',{type:'POST',cache:false,dataType:'json',data:{ct_data:ct},success:function(data){toastr["success"]("success!");getData(state,county_code);},error:function(error){toastr["error"]("Error!");}});}
function updatestate(st){$.ajax('api/updatestate.php',{type:'POST',cache:false,dataType:'json',data:{state:st},success:function(data){toastr["success"]("success!");getData(state,county_code);},error:function(error){toastr["error"]("Error!");}});}
function updatect(ct){$.ajax('api/updatect.php',{type:'POST',cache:false,dataType:'json',data:{ct:ct},success:function(data){toastr["success"]("success!");getData(state,county_code);},error:function(error){toastr["error"]("Error!");}});}
function deletect(id){$.ajax('api/deletect.php',{type:'POST',cache:false,dataType:'json',data:{ct_id:id},success:function(data){toastr["success"]("success!");getData(state,county_code);},error:function(error){toastr["error"]("Error!");}});}
$(document).ready(function(){function searchTable(){var table=$('#search_table');var oTable=table.dataTable({"language":{"aria":{"sortAscending":": activate to sort column ascending","sortDescending":": activate to sort column descending"},"emptyTable":"No data available in table","info":"Showing _START_ to _END_ of _TOTAL_ entries","infoEmpty":"No entries found","infoFiltered":"(filtered1 from _MAX_ total entries)","lengthMenu":"_MENU_ entries","search":"Search:","zeroRecords":"No matching records found"},"order":[],"searching":false,"aaSorting":false,"paging":false,"bInfo":false,"lengthMenu":[[5,10,15,20,-1],[5,10,15,20,"All"]],"pageLength":5,"bLengthChange":false,});}
function handleModals(){$("#add_ct_md").draggable({handle:".modal-header"});$("#update_ct_md").draggable({handle:".modal-header"});$("#update_state_md").draggable({handle:".modal-header"});}
searchTable();handleModals();stateSelected=[];usamap=new jvm.Map({map:'us_aea',container:$('#map'),backgroundColor:'#afcbfe',regionsSelectable:true,regionsSelectableOne:true,regionStyle:{initial:{fill:'#F0EFE9'},selected:{fill:'#F00'},hover:{fill:'#F00'}},regionLabelStyle:{initial:{fill:'#00F'},hover:{fill:'black'}},series:{regions:[{attribute:'fill'}]},labels:{regions:{render:function(code){var doNotShow=[];if(doNotShow.indexOf(code)===-1){return code.split('-')[1];}},offsets:function(code){return{'CA':[-10,10],'ID':[0,40],'OK':[25,0],'LA':[-20,0],'FL':[45,0],'KY':[10,5],'VA':[15,5],'MI':[30,30],'AK':[50,-25],'HI':[25,50],'MD':[0,-5],'DC':[0,5],}[code.split('-')[1]];}}},onRegionClick(event,code){state=code.substring(3,5);county_code='';$("#search_txt").val("");getData(state,'');$('#county_map').empty();$('#county_map').vectorMap({map:code.toLowerCase()+'_lcc_en',backgroundColor:'#afcbfe',regionsSelectable:true,regionsSelectableOne:true,regionStyle:{initial:{fill:'#F0EFE9'},selected:{fill:'#F00'},hover:{fill:'#F00'}},regionLabelStyle:{initial:{fill:'#00F'},hover:{fill:'black'}},onRegionClick(event,code){county_code=code;getData(state,county_code);}});}});var searchgrid=$("#search_table").DataTable();var columnData=['code','state','name'];$("#search_txt").keyup(function(e){var keyword=$("#search_txt").val();if(keyword!=''){$("#search_area").css("display","block");$.ajax('api/search.php',{type:'POST',cache:false,dataType:'json',data:{keyword:keyword},success:function(data){searchgrid.clear();if(data.length==0){$("#search_area").css("display","none");}
$.each(data,function(i,v){var row=[];$.each(columnData,function(j,k){row.push(v[columnData[j]].replace(new RegExp("("+preg_quote(keyword)+")",'gi'),"<b style='color:red'>$1</b>"));});searchgrid.row.add(row);});searchgrid.draw();},error:function(error){toastr["error"]("Error!");}});}else{searchgrid.clear();searchgrid.draw();$("#search_area").css("display","none");}});$("#add_ct_save_btn").on('click',function(){if(county_code!=''){var ct={"ct_code":county_code,"ct_name":$("#add_ct_name").val(),"ct_other_id":$("#add_ct_other_id").val(),"ct_bcode":$("#add_ct_bcode").val(),"ct_tia":$("#add_ct_tia").val(),"ct_windspeed_f":$("#add_ct_windspeed_f").val(),"ct_special_locale":$("#add_ct_special_locale").val(),"ct_windspeed_local":$("#add_ct_windspeed_local").val(),"ct_note":$("#add_ct_note").val().replace(/(?:\r\n|\r|\n)/g,'<br>'),"ct_email":$("#add_ct_email").val(),"ct_phone":$("#add_ct_phone").val(),"ct_contact":$("#add_ct_contact").val()};insertData(ct);$("#add_ct_md").modal('hide');}
else{toastr["warning"]("Please select county or city!");}});$(".add_ct_btn").on('click',function(){$("#add_ct_name").val("");$("#add_ct_other_id").val("");$("#add_ct_bcode").val("");$("#add_ct_tia").val("");$("#add_ct_windspeed_f").val("");$("#add_ct_special_locale").val("");$("#add_ct_windspeed_local").val("");$("#add_ct_note").val("");$("#add_ct_contact").val("");$("#add_ct_phone").val("");$("#add_ct_email").val("");});$("#update_state_save_btn").on('click',function(){var stateData={"state_name":state,"state_hyperlink":$("#update_state_hyperlink").val(),"state_tia":$("#update_state_tia").val(),"state_bcode":$("#update_state_bcode").val(),"state_note":$("#update_state_note").val().replace(/(?:\r\n|\r|\n)/g,'<br>'),"state_email":$("#update_state_email").val(),"state_phone":$("#update_state_phone").val(),"state_contact":$("#update_state_contact").val(),};updatestate(stateData);$("#update_state_md").modal('hide');});$("#update_ct_save_btn").on("click",function(){var ctData={"ct_id":$("#update_ct_id").val(),"ct_name":$("#update_ct_name").val(),"ct_other_id":$("#update_ct_other_id").val(),"ct_bcode":$("#update_ct_bcode").val(),"ct_tia":$("#update_ct_tia").val(),"ct_windspeed_f":$("#update_ct_special_locale").val(),"ct_special_locale":$("#update_ct_special_locale").val(),"ct_windspeed_local":$("#update_ct_windspeed_local").val(),"ct_note":$("#update_ct_note").val().replace(/(?:\r\n|\r|\n)/g,'<br>'),"ct_email":$("#update_ct_email").val(),"ct_phone":$("#update_ct_phone").val(),"ct_contact":$("#update_ct_contact").val()};updatect(ctData);$("#update_ct_md").modal('hide');});$("#search_table tbody").on("click","tr",function(){county_code=$(this).find("td:first-child").html();state=$(this).find("td:eq(1)").text();$("#search_txt").val(state+" | "+$(this).find("td:eq(2)").text());$("#search_area").css("display","none");getData(state,county_code);var mapObj=$('#map').vectorMap('get','mapObject');mapObj.setFocus({region:'US-'+state.toUpperCase(),scale:1,animate:true});$('#county_map').empty();var countyMap=new jvm.Map({map:"us-"+state.toLowerCase()+'_lcc_en',container:$('#county_map'),backgroundColor:'#afcbfe',regionsSelectable:true,regionsSelectableOne:true,regionStyle:{initial:{fill:'#F0EFE9'},selected:{fill:'#F00'},hover:{fill:'#F00'}},regionLabelStyle:{initial:{fill:'#00F'},hover:{fill:'black'}},series:{regions:[{attribute:'fill'}]},onRegionClick(event,code){county_code=code;getData(state,county_code);}});});});