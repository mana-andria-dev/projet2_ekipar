<?php

/* base.html.twig */
class __TwigTemplate_ea0c2ffe1ae5edcbcb3bfca8194c0dcd188f0499112b58fe6197944263429fd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a7ebc6e65b03d870ccfb79228bf50f1ba87f8e157f68c6daf1d3e0bc6c69040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a7ebc6e65b03d870ccfb79228bf50f1ba87f8e157f68c6daf1d3e0bc6c69040->enter($__internal_3a7ebc6e65b03d870ccfb79228bf50f1ba87f8e157f68c6daf1d3e0bc6c69040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html>
    <head>
            <meta charset=\"UTF-8\" />
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
            <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    </head>
    <body>";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 102
        echo "</body>
</html>

";
        
        $__internal_3a7ebc6e65b03d870ccfb79228bf50f1ba87f8e157f68c6daf1d3e0bc6c69040->leave($__internal_3a7ebc6e65b03d870ccfb79228bf50f1ba87f8e157f68c6daf1d3e0bc6c69040_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_45d1f2f7e124ceadf7106517a003fd78ce21ca4af5555c7bcf8eb060b715c2c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45d1f2f7e124ceadf7106517a003fd78ce21ca4af5555c7bcf8eb060b715c2c3->enter($__internal_45d1f2f7e124ceadf7106517a003fd78ce21ca4af5555c7bcf8eb060b715c2c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symfony!";
        
        $__internal_45d1f2f7e124ceadf7106517a003fd78ce21ca4af5555c7bcf8eb060b715c2c3->leave($__internal_45d1f2f7e124ceadf7106517a003fd78ce21ca4af5555c7bcf8eb060b715c2c3_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c98b1b35799be61b71c9ac8c71015750f80aa63301e7e41e8c8700b64087f59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c98b1b35799be61b71c9ac8c71015750f80aa63301e7e41e8c8700b64087f59->enter($__internal_3c98b1b35799be61b71c9ac8c71015750f80aa63301e7e41e8c8700b64087f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "        <style>
            @import url(http://fonts.googleapis.com/css?family=Roboto);
            /****** LOGIN ******/
            .login-container {
                padding: 30px;
                max-width: 350px;
                width: 100% !important;
                background-color: #F7F7F7;
                margin: 100px auto;
                border-radius: 2px;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                overflow: hidden;
                font-family: roboto;
            }
            .login-container h1 {
                text-align: center;
                font-size: 1.8em;
                font-family: roboto;
            }
            .login-container input[type=submit] {
                width: 100%;
                display: block;
                margin-bottom: 10px;
                position: relative;
            }
            .login-container input[type=text], input[type=password] {
                height: 44px;
                font-size: 16px;
                width: 100%;
                margin-bottom: 10px;
                -webkit-appearance: none;
                background: #fff;
                border: 1px solid #d9d9d9;
                border-top: 1px solid #c0c0c0;
                /* border-radius: 2px; */
                padding: 0 8px;
                box-sizing: border-box;
                -moz-box-sizing: border-box;
            }
            .login-container input[type=text]:hover, input[type=password]:hover {
                border: 1px solid #b9b9b9;
                border-top: 1px solid #a0a0a0;
                -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
                -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
                box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
            }
            .login-submit {
                /* border: 1px solid #3079ed; */
                border: 0px;
                color: #fff;
                text-shadow: 0 1px rgba(0,0,0,0.1);
                background-color: #4d90fe;
                padding: 17px 0px;
                font-family: roboto;
                font-size: 14px;
                /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
            }
            .login-submit:hover {
                /* border: 1px solid #2f5bb7; */
                border: 0px;
                text-shadow: 0 1px rgba(0,0,0,0.3);
                background-color: #357ae8;
                /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
            }
            .login-container a {
                text-decoration: none;
                color: #666;
                font-weight: 400;
                text-align: center;
                display: inline-block;
                opacity: 0.6;
                transition: opacity ease 0.5s;
            }
            .login-help{
                font-size: 12px;
            }
        </style>
      
            <div class=\"container\">
                
        </div>

        
                ";
        // line 96
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 98
        echo "            </div>
        <script   src=\"https://code.jquery.com/jquery-3.1.1.min.js\"   integrity=\"sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=\"   crossorigin=\"anonymous\"></script>
        <script type=\"text/javascript\" src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        ";
        // line 101
        $this->displayBlock('javascripts', $context, $blocks);
        // line 102
        echo "    ";
        
        $__internal_3c98b1b35799be61b71c9ac8c71015750f80aa63301e7e41e8c8700b64087f59->leave($__internal_3c98b1b35799be61b71c9ac8c71015750f80aa63301e7e41e8c8700b64087f59_prof);

    }

    // line 96
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cf492af35e086ae2160fa8b34d95ed0a761075adb678276f243b874afc357b80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf492af35e086ae2160fa8b34d95ed0a761075adb678276f243b874afc357b80->enter($__internal_cf492af35e086ae2160fa8b34d95ed0a761075adb678276f243b874afc357b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 97
        echo "                ";
        
        $__internal_cf492af35e086ae2160fa8b34d95ed0a761075adb678276f243b874afc357b80->leave($__internal_cf492af35e086ae2160fa8b34d95ed0a761075adb678276f243b874afc357b80_prof);

    }

    // line 101
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ecfa0ca37174e958c52bc74ead0e0491000482f1ac769ad4c54c8d822c3a6a14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecfa0ca37174e958c52bc74ead0e0491000482f1ac769ad4c54c8d822c3a6a14->enter($__internal_ecfa0ca37174e958c52bc74ead0e0491000482f1ac769ad4c54c8d822c3a6a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ecfa0ca37174e958c52bc74ead0e0491000482f1ac769ad4c54c8d822c3a6a14->leave($__internal_ecfa0ca37174e958c52bc74ead0e0491000482f1ac769ad4c54c8d822c3a6a14_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 101,  185 => 97,  179 => 96,  172 => 102,  170 => 101,  165 => 98,  163 => 96,  78 => 13,  72 => 12,  60 => 10,  50 => 102,  48 => 12,  43 => 10,  38 => 8,  34 => 7,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!DOCTYPE html>
<html>
    <head>
            <meta charset=\"UTF-8\" />
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
            <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
            <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
            <title>{% block title %}symfony!{% endblock %}</title>
    </head>
    <body>{% block body %}
        <style>
            @import url(http://fonts.googleapis.com/css?family=Roboto);
            /****** LOGIN ******/
            .login-container {
                padding: 30px;
                max-width: 350px;
                width: 100% !important;
                background-color: #F7F7F7;
                margin: 100px auto;
                border-radius: 2px;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                overflow: hidden;
                font-family: roboto;
            }
            .login-container h1 {
                text-align: center;
                font-size: 1.8em;
                font-family: roboto;
            }
            .login-container input[type=submit] {
                width: 100%;
                display: block;
                margin-bottom: 10px;
                position: relative;
            }
            .login-container input[type=text], input[type=password] {
                height: 44px;
                font-size: 16px;
                width: 100%;
                margin-bottom: 10px;
                -webkit-appearance: none;
                background: #fff;
                border: 1px solid #d9d9d9;
                border-top: 1px solid #c0c0c0;
                /* border-radius: 2px; */
                padding: 0 8px;
                box-sizing: border-box;
                -moz-box-sizing: border-box;
            }
            .login-container input[type=text]:hover, input[type=password]:hover {
                border: 1px solid #b9b9b9;
                border-top: 1px solid #a0a0a0;
                -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
                -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
                box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
            }
            .login-submit {
                /* border: 1px solid #3079ed; */
                border: 0px;
                color: #fff;
                text-shadow: 0 1px rgba(0,0,0,0.1);
                background-color: #4d90fe;
                padding: 17px 0px;
                font-family: roboto;
                font-size: 14px;
                /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
            }
            .login-submit:hover {
                /* border: 1px solid #2f5bb7; */
                border: 0px;
                text-shadow: 0 1px rgba(0,0,0,0.3);
                background-color: #357ae8;
                /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
            }
            .login-container a {
                text-decoration: none;
                color: #666;
                font-weight: 400;
                text-align: center;
                display: inline-block;
                opacity: 0.6;
                transition: opacity ease 0.5s;
            }
            .login-help{
                font-size: 12px;
            }
        </style>
      
            <div class=\"container\">
                
        </div>

        
                {% block fos_user_content %}
                {% endblock %}
            </div>
        <script   src=\"https://code.jquery.com/jquery-3.1.1.min.js\"   integrity=\"sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=\"   crossorigin=\"anonymous\"></script>
        <script type=\"text/javascript\" src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        {% block javascripts %}{% endblock %}
    {% endblock %}</body>
</html>

", "base.html.twig", "/opt/lampp/htdocs/user/app/Resources/views/base.html.twig");
    }
}
