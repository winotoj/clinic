<?php

/* admin/doctor_calendar.html.twig */
class __TwigTemplate_1085dce426a5c311c4c9e7fa8a3d8311719dfe95de5e7dca19122edf6dca9cdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "admin/doctor_calendar.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'matchpwd' => array($this, 'block_matchpwd'),
            'css' => array($this, 'block_css'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Calendar";
    }

    // line 3
    public function block_matchpwd($context, array $blocks = array())
    {
        // line 4
        echo "    <link href='/assets/css/fullcalendar.css' rel='stylesheet' />
    <script src='/assets/js/jquery-1.9.1.min.js'></script>
    <script src='/assets/js/moment.min.js'></script>
    <script src='/assets/js/jquery-ui-1.10.2.custom.min.js'></script>
    <script src='/assets/js/fullcalendar.min.js'></script>
    <script>

        \$(document).ready(function () {
            var date = new Date();
            var d = date.getDate();
            var m = date.getMonth();
            var y = date.getFullYear();

            var calendar = \$('#calendar').fullCalendar({
                editable: true,
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },

                events: \"events.php\",

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
                }
            });
        });

    </script>
";
    }

    // line 94
    public function block_css($context, array $blocks = array())
    {
        // line 95
        echo "    <style>
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

    // line 111
    public function block_content($context, array $blocks = array())
    {
        echo "<div id='calendar'></div>";
    }

    public function getTemplateName()
    {
        return "admin/doctor_calendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 111,  136 => 95,  133 => 94,  40 => 4,  37 => 3,  31 => 2,  11 => 1,);
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
{% block title %}Calendar{% endblock %}
{% block matchpwd %}
    <link href='/assets/css/fullcalendar.css' rel='stylesheet' />
    <script src='/assets/js/jquery-1.9.1.min.js'></script>
    <script src='/assets/js/moment.min.js'></script>
    <script src='/assets/js/jquery-ui-1.10.2.custom.min.js'></script>
    <script src='/assets/js/fullcalendar.min.js'></script>
    <script>

        \$(document).ready(function () {
            var date = new Date();
            var d = date.getDate();
            var m = date.getMonth();
            var y = date.getFullYear();

            var calendar = \$('#calendar').fullCalendar({
                editable: true,
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },

                events: \"events.php\",

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
                }
            });
        });

    </script>
{% endblock %}
{% block css %}
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
    {% block content %}<div id='calendar'></div>{% endblock %}

", "admin/doctor_calendar.html.twig", "C:\\xampp\\htdocs\\php-project\\templates\\admin\\doctor_calendar.html.twig");
    }
}
