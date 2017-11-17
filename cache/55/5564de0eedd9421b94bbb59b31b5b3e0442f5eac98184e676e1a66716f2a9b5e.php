<?php

/* admin/test_dr_calendar.html.twig */
class __TwigTemplate_19e027087f29a5f31f6acb74a612a7ea087a9a1bd5976f4b861a8909d4026584 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "admin/test_dr_calendar.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'calendar' => array($this, 'block_calendar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Doctor Calendar";
    }

    // line 5
    public function block_calendar($context, array $blocks = array())
    {
        // line 6
        echo " <script src=\"https://code.jquery.com/jquery.js\"></script>
        <script src='/assets/js/jquery-1.9.1.min.js'></script>
        <script src=\"/assets/bootstrap/js/bootstrap.min.js\"></script>
        <script src='/assets/js/moment.min.js'></script>
        <script src='/assets/js/jquery-ui-1.10.2.custom.min.js'></script>
        <script src='/assets/js/fullcalendar.min.js'></script>
     <link href='/assets/bootstrap/css/bootstrap.min.css' rel='stylesheet' />
        <link href='/assets/css/fullcalendar.css' rel='stylesheet' />
        <script>
          \$(document).ready(function () {
                var date = new Date();
                var d = date.getDate();
                var m = date.getMonth();
                var y = date.getFullYear();
                var myEvent;
                var calendar = \$('#calendar').fullCalendar({
                    editable: true,
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,agendaWeek,agendaDay'
                    },
                    events: \"/events\",
                    // Convert the allDay from string to boolean
                    eventRender: function (event, element, view) {
                        if (event.allDay === 'true') {
                            event.allDay = true;
                        } else {
                            event.allDay = false;
                        }
                   },
                    selectable: true,
                    selectHelper: true,
                    select: function (start, end, allDay) {
                        var title = prompt('Event Title:');
                        var url = prompt('Type Event url, if exits:');
                        if (title) {
                            var start = \$.fullCalendar.moment(start).format(\"YYYY-MM-DD HH:mm:ss\");
                            var end = \$.fullCalendar.moment(end).format(\"YYYY-MM-DD HH:mm:ss\");
                            \$.ajax({
                                url: 'http://localhost:8080/ipd/fullcalendar/add_events.php',
                                data: 'title=' + title + '&start=' + start + '&end=' + end + '&url=' + url,
                                type: \"POST\",
                                success: function (json) {
                                    alert('Added Successfully');
                                }
                            });
                            calendar.fullCalendar('renderEvent',

                                    {

                                        title: title,

                                        start: start,

                                        end: end,

                                        allDay: allDay

                                    },

                                    true // make the event \"stick\"

                                    );

                        }

                        calendar.fullCalendar('unselect');

                    },
                    editable: true,
                    eventDrop: function (event, delta) {

                        var start = \$.fullCalendar.formatDate(event.start, \"yyyy-MM-dd HH:mm:ss\");

                        var end = \$.fullCalendar.formatDate(event.end, \"yyyy-MM-dd HH:mm:ss\");

                        \$.ajax({

                            url: 'http://localhost:8080/ipd/fullcalendar/update_events.php',

                            data: 'title=' + event.title + '&start=' + start + '&end=' + end + '&id=' + event.id,

                            type: \"POST\",

                            success: function (json) {

                                alert(\"Updated Successfully\");

                            }

                        });

                    },

                    eventResize: function (event) {

                        var start = \$.fullCalendar.formatDate(event.start, \"yyyy-MM-dd HH:mm:ss\");

                        var end = \$.fullCalendar.formatDate(event.end, \"yyyy-MM-dd HH:mm:ss\");

                        \$.ajax({

                            url: 'http://localhost:8080/ipd/fullcalendar/update_events.php',

                            data: 'title=' + event.title + '&start=' + start + '&end=' + end + '&id=' + event.id,

                            type: \"POST\",

                            success: function (json) {

                                alert(\"Updated Successfully\");

                            }

                        });



                    },

                     eventClick:  function(event, jsEvent, view) {

                     myEvent= event;

                     \$('#modalTitle').html(event.title);

                     \$('#modalPatientName').html(event.title + ' wrote: ');

                     \$('#modalPatientMessage').html(event.patientmsg);

                     \$('#doctorName').html(event.doctorName);

                     \$('#doctorNote').val(event.doctornote);

                     \$('#patientId').val(event.patientId);

                     \$('#fullCalModal').modal();

                     \$('#calendar').fullCalendar('refetchEvents');

                     

                     }

                });

                \$('#modalSaveNote').click(function () {

                    myEvent.doctornote = \$('#doctorNote').val();

                    \$.ajax({

                        url: \"/add_note_event\",

                        data: 'note=' + myEvent.doctornote + '&id=' + myEvent.id,

                        type: \"POST\",



                        success: function (response) {

                            \$('#calendar').fullCalendar('refetchEvents');

                        },

                        error: function (e) {

                            alert('Error processing your request: ' + e.responseText);

                        }

                    });

                });

                var n;



 if (!(\"Notification\" in window)) {

    alert(\"This browser does not support system notifications\");

  }

// Let's check whether notification permissions have already been granted

  else if (Notification.permission === \"granted\") {

    // If it's okay let's create a notification

    var options = {

      body: \"!!!\",

      icon: \"/images/rock.jpg\"

  }

    n = new Notification(\"Hi there!\",options);

  }

  // Otherwise, we need to ask the user for permission

  else if (Notification.permission !== 'denied') {

    Notification.requestPermission(function (permission) {

      // If the user accepts, let's create a notification

      if (permission === \"granted\") {

        n = new Notification(\"Notification OK!\");

      }

    });

  }



  var n;



  function spawnNotification(theBody,theIcon,theTitle) {

  var options = {

      body: \"you have \" + theBody + \"new appointment(s)\",

      icon: theIcon

  }

   n = new Notification(theTitle,options);

}





if(typeof(!EventSource) !== \"undefined\") {

    var source = new EventSource(\"/calx\");

        source.onmessage = function(event) {

    \t//var msg = \$.parseJSON(event.data);

    \tspawnNotification(event.data,'/images/ok.png','New Notification');

    \tn.close.bind(n);

    };

} else {

    document.getElementById(\"result\").innerHTML = \"Sorry, your browser does not support server-sent events...\";

}



            });



        </script>

        <style>



            body {

                margin-top: 40px;

                text-align: center;

                font-size: 14px;

                font-family: \"Lucida Grande\",Helvetica,Arial,Verdana,sans-serif;



            }





            #calendar {

                width: 900px;

                margin: 0 auto;

            }



        </style>
";
    }

    // line 315
    public function block_content($context, array $blocks = array())
    {
        // line 316
        echo "
        <div id=\"result\"></div>

        <div id='calendar'></div>

        <div id=\"fullCalModal\" class=\"modal fade\">

            <div class=\"modal-dialog\">

                <div class=\"modal-content\">

                    <div class=\"modal-header\">

                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span> <span class=\"sr-only\">close</span></button>

                        <h4 id=\"modalTitle\" class=\"modal-title\"></h4>

                    </div>

                    <div id=\"modalBody\" class=\"modal-body\">

                        <p id=\"modalPatientName\"></p>

                        <p id=\"modalPatientMessage\"></p>

                        <div class=\"form-group\">

                            <label for=\"comment\" id=\"doctorName\"></label>

                            <textarea class=\"form-control\" rows=\"5\" id=\"doctorNote\"></textarea>

                        </div>

                    </div>

                    <div class=\"modal-footer\">

                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>

                        <button class=\"btn btn-primary\" id=\"modalSaveNote\">Save</button>

                        <form method=\"post\" action=\"/load_history\">

                            <input type=\"hidden\" id=\"patientId\" name=\"patientId\" value=\"\">

                            <input type=\"submit\" name=\"showHistory\" value=\"Load History\">

                        </form>

                        

                    </div>

                </div>

            </div>

        </div>

";
    }

    public function getTemplateName()
    {
        return "admin/test_dr_calendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 316,  351 => 315,  39 => 6,  36 => 5,  30 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"master.html.twig\" %}


{% block title %}Doctor Calendar{% endblock %}
{% block calendar %}
 <script src=\"https://code.jquery.com/jquery.js\"></script>
        <script src='/assets/js/jquery-1.9.1.min.js'></script>
        <script src=\"/assets/bootstrap/js/bootstrap.min.js\"></script>
        <script src='/assets/js/moment.min.js'></script>
        <script src='/assets/js/jquery-ui-1.10.2.custom.min.js'></script>
        <script src='/assets/js/fullcalendar.min.js'></script>
     <link href='/assets/bootstrap/css/bootstrap.min.css' rel='stylesheet' />
        <link href='/assets/css/fullcalendar.css' rel='stylesheet' />
        <script>
          \$(document).ready(function () {
                var date = new Date();
                var d = date.getDate();
                var m = date.getMonth();
                var y = date.getFullYear();
                var myEvent;
                var calendar = \$('#calendar').fullCalendar({
                    editable: true,
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,agendaWeek,agendaDay'
                    },
                    events: \"/events\",
                    // Convert the allDay from string to boolean
                    eventRender: function (event, element, view) {
                        if (event.allDay === 'true') {
                            event.allDay = true;
                        } else {
                            event.allDay = false;
                        }
                   },
                    selectable: true,
                    selectHelper: true,
                    select: function (start, end, allDay) {
                        var title = prompt('Event Title:');
                        var url = prompt('Type Event url, if exits:');
                        if (title) {
                            var start = \$.fullCalendar.moment(start).format(\"YYYY-MM-DD HH:mm:ss\");
                            var end = \$.fullCalendar.moment(end).format(\"YYYY-MM-DD HH:mm:ss\");
                            \$.ajax({
                                url: 'http://localhost:8080/ipd/fullcalendar/add_events.php',
                                data: 'title=' + title + '&start=' + start + '&end=' + end + '&url=' + url,
                                type: \"POST\",
                                success: function (json) {
                                    alert('Added Successfully');
                                }
                            });
                            calendar.fullCalendar('renderEvent',

                                    {

                                        title: title,

                                        start: start,

                                        end: end,

                                        allDay: allDay

                                    },

                                    true // make the event \"stick\"

                                    );

                        }

                        calendar.fullCalendar('unselect');

                    },
                    editable: true,
                    eventDrop: function (event, delta) {

                        var start = \$.fullCalendar.formatDate(event.start, \"yyyy-MM-dd HH:mm:ss\");

                        var end = \$.fullCalendar.formatDate(event.end, \"yyyy-MM-dd HH:mm:ss\");

                        \$.ajax({

                            url: 'http://localhost:8080/ipd/fullcalendar/update_events.php',

                            data: 'title=' + event.title + '&start=' + start + '&end=' + end + '&id=' + event.id,

                            type: \"POST\",

                            success: function (json) {

                                alert(\"Updated Successfully\");

                            }

                        });

                    },

                    eventResize: function (event) {

                        var start = \$.fullCalendar.formatDate(event.start, \"yyyy-MM-dd HH:mm:ss\");

                        var end = \$.fullCalendar.formatDate(event.end, \"yyyy-MM-dd HH:mm:ss\");

                        \$.ajax({

                            url: 'http://localhost:8080/ipd/fullcalendar/update_events.php',

                            data: 'title=' + event.title + '&start=' + start + '&end=' + end + '&id=' + event.id,

                            type: \"POST\",

                            success: function (json) {

                                alert(\"Updated Successfully\");

                            }

                        });



                    },

                     eventClick:  function(event, jsEvent, view) {

                     myEvent= event;

                     \$('#modalTitle').html(event.title);

                     \$('#modalPatientName').html(event.title + ' wrote: ');

                     \$('#modalPatientMessage').html(event.patientmsg);

                     \$('#doctorName').html(event.doctorName);

                     \$('#doctorNote').val(event.doctornote);

                     \$('#patientId').val(event.patientId);

                     \$('#fullCalModal').modal();

                     \$('#calendar').fullCalendar('refetchEvents');

                     

                     }

                });

                \$('#modalSaveNote').click(function () {

                    myEvent.doctornote = \$('#doctorNote').val();

                    \$.ajax({

                        url: \"/add_note_event\",

                        data: 'note=' + myEvent.doctornote + '&id=' + myEvent.id,

                        type: \"POST\",



                        success: function (response) {

                            \$('#calendar').fullCalendar('refetchEvents');

                        },

                        error: function (e) {

                            alert('Error processing your request: ' + e.responseText);

                        }

                    });

                });

                var n;



 if (!(\"Notification\" in window)) {

    alert(\"This browser does not support system notifications\");

  }

// Let's check whether notification permissions have already been granted

  else if (Notification.permission === \"granted\") {

    // If it's okay let's create a notification

    var options = {

      body: \"!!!\",

      icon: \"/images/rock.jpg\"

  }

    n = new Notification(\"Hi there!\",options);

  }

  // Otherwise, we need to ask the user for permission

  else if (Notification.permission !== 'denied') {

    Notification.requestPermission(function (permission) {

      // If the user accepts, let's create a notification

      if (permission === \"granted\") {

        n = new Notification(\"Notification OK!\");

      }

    });

  }



  var n;



  function spawnNotification(theBody,theIcon,theTitle) {

  var options = {

      body: \"you have \" + theBody + \"new appointment(s)\",

      icon: theIcon

  }

   n = new Notification(theTitle,options);

}





if(typeof(!EventSource) !== \"undefined\") {

    var source = new EventSource(\"/calx\");

        source.onmessage = function(event) {

    \t//var msg = \$.parseJSON(event.data);

    \tspawnNotification(event.data,'/images/ok.png','New Notification');

    \tn.close.bind(n);

    };

} else {

    document.getElementById(\"result\").innerHTML = \"Sorry, your browser does not support server-sent events...\";

}



            });



        </script>

        <style>



            body {

                margin-top: 40px;

                text-align: center;

                font-size: 14px;

                font-family: \"Lucida Grande\",Helvetica,Arial,Verdana,sans-serif;



            }





            #calendar {

                width: 900px;

                margin: 0 auto;

            }



        </style>
{% endblock %} 
   {% block content %}

        <div id=\"result\"></div>

        <div id='calendar'></div>

        <div id=\"fullCalModal\" class=\"modal fade\">

            <div class=\"modal-dialog\">

                <div class=\"modal-content\">

                    <div class=\"modal-header\">

                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span> <span class=\"sr-only\">close</span></button>

                        <h4 id=\"modalTitle\" class=\"modal-title\"></h4>

                    </div>

                    <div id=\"modalBody\" class=\"modal-body\">

                        <p id=\"modalPatientName\"></p>

                        <p id=\"modalPatientMessage\"></p>

                        <div class=\"form-group\">

                            <label for=\"comment\" id=\"doctorName\"></label>

                            <textarea class=\"form-control\" rows=\"5\" id=\"doctorNote\"></textarea>

                        </div>

                    </div>

                    <div class=\"modal-footer\">

                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>

                        <button class=\"btn btn-primary\" id=\"modalSaveNote\">Save</button>

                        <form method=\"post\" action=\"/load_history\">

                            <input type=\"hidden\" id=\"patientId\" name=\"patientId\" value=\"\">

                            <input type=\"submit\" name=\"showHistory\" value=\"Load History\">

                        </form>

                        

                    </div>

                </div>

            </div>

        </div>

{% endblock %}




", "admin/test_dr_calendar.html.twig", "/home/cp4809/clinic.ipd10.com/templates/admin/test_dr_calendar.html.twig");
    }
}
