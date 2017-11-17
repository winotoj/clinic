<?php

/* admin/test_dr_schedule.html */
class __TwigTemplate_5318754b86a5c91e0df873756cafc4eb184720bfb1f383af23e7c802117c516a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

<html>

    <body>
        <h1>Getting server updates</h1>

        <div id=\"result\"></div>
        <script>
            var n;
            if (!(\"Notification\" in window)) {

                alert(\"This browser does not support system notifications\");

            }
        // Let's check whether notification permissions have already been granted
            else if (Notification.permission === \"granted\") {
                // If it's okay let's create a notification
                var options = {
                    body: \"event.data\",
                    icon: \"img/rock.jpg\"
                }
                n = new Notification(\"Hi there!\", options);

            }
            // Otherwise, we need to ask the user for permission

            else if (Notification.permission !== 'denied') {

                Notification.requestPermission(function (permission) {

                    // If the user accepts, let's create a notification

                    if (permission === \"granted\") {

                        n = new Notification(\"Hi there!\");

                    }

                });

            }
            var n;
            function spawnNotification(theBody, theIcon, theTitle) {

                var options = {

                    body: theBody,

                    icon: theIcon

                }

                n = new Notification(theTitle, options);

            }





            if (typeof (EventSource) !== \"undefined\") {

                var source = new EventSource(\"/cal1\");

                source.onmessage = function (event) {

                    //var msg = \$.parseJSON(event.data);

                    spawnNotification(event.data, 'img/ok.png', 'New Notification');



                    n.close.bind(n);



                    document.getElementById(\"result\").innerHTML += event.data + \"<br>\";

                };

            } else {

                document.getElementById(\"result\").innerHTML = \"Sorry, your browser does not support server-sent events...\";

            }

        </script>







    </body>

</html>";
    }

    public function getTemplateName()
    {
        return "admin/test_dr_schedule.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>

<html>

    <body>
        <h1>Getting server updates</h1>

        <div id=\"result\"></div>
        <script>
            var n;
            if (!(\"Notification\" in window)) {

                alert(\"This browser does not support system notifications\");

            }
        // Let's check whether notification permissions have already been granted
            else if (Notification.permission === \"granted\") {
                // If it's okay let's create a notification
                var options = {
                    body: \"event.data\",
                    icon: \"img/rock.jpg\"
                }
                n = new Notification(\"Hi there!\", options);

            }
            // Otherwise, we need to ask the user for permission

            else if (Notification.permission !== 'denied') {

                Notification.requestPermission(function (permission) {

                    // If the user accepts, let's create a notification

                    if (permission === \"granted\") {

                        n = new Notification(\"Hi there!\");

                    }

                });

            }
            var n;
            function spawnNotification(theBody, theIcon, theTitle) {

                var options = {

                    body: theBody,

                    icon: theIcon

                }

                n = new Notification(theTitle, options);

            }





            if (typeof (EventSource) !== \"undefined\") {

                var source = new EventSource(\"/cal1\");

                source.onmessage = function (event) {

                    //var msg = \$.parseJSON(event.data);

                    spawnNotification(event.data, 'img/ok.png', 'New Notification');



                    n.close.bind(n);



                    document.getElementById(\"result\").innerHTML += event.data + \"<br>\";

                };

            } else {

                document.getElementById(\"result\").innerHTML = \"Sorry, your browser does not support server-sent events...\";

            }

        </script>







    </body>

</html>", "admin/test_dr_schedule.html", "/home/cp4809/clinic.ipd10.com/templates/admin/test_dr_schedule.html");
    }
}
