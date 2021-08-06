function add_user()
{
    var d=jQuery("#add_user").serialize();

    $.ajax({
        type: "POST",
        url: 'http://localhost/api_learning/index.php/user/save/0',
        data:d,

        beforeSend:function()
        {

        },

        success:function(h)
        {
            try
            {
                var obj=JSON.parse(h);

                if(obj.alert=='success')
                {
                    console.log('success');
                }
                else
                {
                    console.log('failed');
                }
            }
            catch(error)
            {
                console.log(error);
            }
        },

        complete:function()
        {

        }
    });

    return false;

}


function add_admin()
{
    var d=jQuery("#add_admin").serialize();

    $.ajax({
        type: "POST",
        url: 'http://localhost/api_learning/index.php/admin/save/0',
        data:d,

        beforeSend:function()
        {

        },

        success:function(h)
        {
            try
            {
                var obj=JSON.parse(h);

                if(obj.alert=='success')
                {
                    console.log('success');
                }
                else
                {
                    console.log('failed');
                }
            }
            catch(error)
            {
                console.log(error);
            }
        },

        complete:function()
        {

        }
    });

    return false;

}


//title
function add_title()
{
    var d=jQuery("#add_title").serialize();

    $.ajax({
        type: "POST",
        url: 'http://localhost/api_learning/index.php/module_title/save/0',
        data:d,

        beforeSend:function()
        {

        },

        success:function(h)
        {
            try
            {
                var obj=JSON.parse(h);

                if(obj.alert=='success')
                {
                    console.log('success');
                    window.location='http://localhost/learning/admin_title.php';
                }
                else
                {
                    console.log('failed');
                }
            }
            catch(error)
            {
                console.log(error);
            }
        },

        complete:function()
        {

        }
    });

    return false;

}

function update_title(id)//ni id title tu
{
    var d=jQuery("#update_title").serialize();

    $.ajax({
        type: "POST",
        url: 'http://localhost/api_learning/index.php/module_title/save/'+id,
        data:d,

        beforeSend:function()
        {

        },

        success:function(h)
        {
            try
            {
                var obj=JSON.parse(h);

                if(obj.alert=='success')
                {
                    console.log('success');
                    window.location='http://localhost/learning/admin_update_title.php?id='+id;//ubah url
                }
                else
                {
                    console.log('failed');
                }
            }
            catch(error)
            {
                console.log(error);
            }
        },

        complete:function()
        {

        }
    });

    return false;

}


//subtitle
function add_subtopic(id)
{
    var d=jQuery("#add_subtopic").serialize();

    $.ajax({
        type: "POST",
        url: 'http://localhost/api_learning/index.php/module_subtopic/save/0',
        data:d,

        beforeSend:function()
        {

        },

        success:function(h)
        {
            try
            {
                var obj=JSON.parse(h);

                if(obj.alert=='success')
                {
                    console.log('success');
                    window.location='http://localhost/learning/admin_sub.php?id='+id;
                }
                else
                {
                    console.log('failed');
                }
            }
            catch(error)
            {
                console.log(error);
            }
        },

        complete:function()
        {

        }
    });

    return false;

}

function update_subtopic(id)//ni id subtopic tu
{
    var d=jQuery("#update_subtopic").serialize();

    $.ajax({
        type: "POST",
        url: 'http://localhost/api_learning/index.php/module_subtopic/save/'+id,
        data:d,

        beforeSend:function()
        {

        },

        success:function(h)
        {
            try
            {
                var obj=JSON.parse(h);

                if(obj.alert=='success')
                {
                    console.log('success');
                    window.location='http://localhost/learning/admin_update_sub.php?id='+id;//ubah url
                }
                else
                {
                    console.log('failed');
                }
            }
            catch(error)
            {
                console.log(error);
            }
        },

        complete:function()
        {

        }
    });

    return false;

}


function add_question()
{
    var d=jQuery("#add_question").serialize();

    $.ajax({
        type: "POST",
        url: 'http://localhost/api_learning/index.php/question/save/0',
        data:d,

        beforeSend:function()
        {

        },

        success:function(h)
        {
            try
            {
                var obj=JSON.parse(h);

                if(obj.alert=='success')
                {
                    console.log('success');
                    document.getElementById("add_question").reset();
                }
                else
                {
                    console.log('failed');
                }
            }
            catch(error)
            {
                console.log(error);
            }
        },

        complete:function()
        {

        }
    });

    return false;

}


function add_answer(id)
{
    var d=jQuery("#add_answer").serialize();

    $.ajax({
        type: "POST",
        url: 'http://localhost/api_learning/index.php/question/save/'+id,
        data:d,

        beforeSend:function()
        {

        },

        success:function(h)
        {
            try
            {
                var obj=JSON.parse(h);

                if(obj.alert=='success')
                {
                    console.log('success');
                    window.location='http://localhost/learning/admin_view_q.php';
                }
                else
                {
                    console.log('failed');
                }
            }
            catch(error)
            {
                console.log(error);
            }
        },

        complete:function()
        {

        }
    });

    return false;

}


//store session
function store_ss(id,link_to)
{
    try
    {
        jQuery.get('http://localhost/learning/store_session.php?id='+id,
        function()
        {
            window.location=link_to;
            console.log(id);
        }
        );
        
    }
    catch(error)
    {
        console.log(error);
    }
    
    //window.location=link_to+'?id='+id;

    //window.location='http://localhost/learning/store_session.php?id='+id;
}


function login_user()
{
    var d=jQuery("#login_user").serialize();

    $.ajax({
        type: "POST",
        url: 'http://localhost/api_learning/index.php/user/login/',
        data:d,

        beforeSend:function()
        {

        },

        success:function(h)
        {
            try
            {
                var obj=JSON.parse(h);

                if(obj.alert=='success')
                {
                    console.log('success');
                    store_ss(obj.user_id,'http://localhost/learning/testtitle.php');//tukar link ni
                    //window.location='http://localhost/learning/testtitle.php';
                }
                else
                {
                    console.log('failed');
                }
            }
            catch(error)
            {
                console.log(error);
            }
        },

        complete:function()
        {

        }
    });

    return false;

}


function login_admin()
{
    var d=jQuery("#login_admin").serialize();

    $.ajax({
        type: "POST",
        url: 'http://localhost/api_learning/index.php/admin/login/',
        data:d,

        beforeSend:function()
        {

        },

        success:function(h)
        {
            try
            {
                var obj=JSON.parse(h);

                if(obj.alert=='success')
                {
                    console.log('success');
                    store_ss(obj.admin_id,'http://localhost/learning/admin_title.php');//tukar link ni
                    //window.location='http://localhost/learning/testtitle.php';
                }
                else
                {
                    console.log('failed');
                }
            }
            catch(error)
            {
                console.log(error);
            }
        },

        complete:function()
        {

        }
    });

    return false;

}


function logout()
{
    $.ajax({
        type: "POST",
        url: 'http://localhost/learning/testlogout.php',//amik url logout
       

        beforeSend:function()
        {

        },

        success:function(h)
        {
            try
            {
                var obj=JSON.parse(h);

                if(obj.msg=='success')
                {
                    console.log('success');
                    
                }
                else
                {
                    console.log('failed');
                }
            }
            catch(error)
            {
                console.log(error);
            }
        },

        complete:function()
        {

        }
    });

    return false;

}


function delete_data(table,id)
{

    $.ajax({
        type: "POST",
        url: 'http://localhost/api_learning/index.php/'+table+'/delete/'+id,

        beforeSend:function()
        {

        },

        success:function(h)
        {
            try
            {
                var obj=JSON.parse(h);

                if(obj.alert=='success')
                {
                    console.log('success');
                    location.reload();
                }
                else
                {
                    console.log('failed');
                }
            }
            catch(error)
            {
                console.log(error);
            }
        },

        complete:function()
        {

        }
    });

    return false;

}