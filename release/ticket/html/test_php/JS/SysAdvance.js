
function SubmitForm()
{
	var IsVal = true;
	InputTextStrip();//�����ı���ո�
   if ($("txtContents").value.empty() || $("txtContents").value.strip() == $("txtContents").getAttribute("msg"))
    {
       alert("����δ��д��������뽨������!");
       IsVal=false; 
   }
    if (IsVal) 
	{
        $("btnSave").disabled = "disabled";
        var sp = "Action=SaveAdvance";
        sp+="&Contents="+$("txtContents").value;
        sp+="&Email="+$("txtEmail").value;
        sp+="&tel="+$("contactPhone").value;
        sp+="&type=sms_SysAdvance";
		var para = sp;//����ı����ֵû�з����ı�Ͳ��ύ
        //Ajax�ύ��Ԫ��
        new Ajax.Request(
        ServiceUrl(),
        {
	        method:"post",
	        parameters:para,

	        onFailure:function(){
	            try{parent.ShowAlert(false,false,"�ύ����ʱ�쳣.");}catch(e){} 
	            $("btnSave").disabled = "";
	        },
	        onSuccess:function(transport)
	        {
		        var content = transport.responseText;
		        if (Logout(content))
	            { 
		            if (content == "OK")
		            {   
		                    SetBack($("btnSave"), "Reconfirm()");	  
		                    try{parent.ShowAlert(true,true,"�ύ���ݳɹ�");}catch(e){}
		            }
		            else
		            {
			            try{parent.ShowAlert(false,false,"�ύ����ʧ��." + content);}catch(e){}
			            $("btnSave").disabled = ""; 
		            }
		            $("btnSave").disabled = "";
		        }  
	        } 
        });
	}

}


function Reconfirm()
{
  window.location.href ="AdvanceList.php?type=sms_AdvanceList";
}