<?php

/* ERBundle:Membre:ajouter.html.twig */
class __TwigTemplate_70dcf40dd26ad29984d146cbc22fa9d0f64db01e7bff5652c49427f3c6364fea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::dream.html.twig", "ERBundle:Membre:ajouter.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'tab' => array($this, 'block_tab'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::dream.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb3f83e38bfea28c42d56c1bf43de57a4b7f94a664ebf4fafb1e3500883ecb33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb3f83e38bfea28c42d56c1bf43de57a4b7f94a664ebf4fafb1e3500883ecb33->enter($__internal_eb3f83e38bfea28c42d56c1bf43de57a4b7f94a664ebf4fafb1e3500883ecb33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERBundle:Membre:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb3f83e38bfea28c42d56c1bf43de57a4b7f94a664ebf4fafb1e3500883ecb33->leave($__internal_eb3f83e38bfea28c42d56c1bf43de57a4b7f94a664ebf4fafb1e3500883ecb33_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_09880c3354e3e8841fe8c2a4b5d3c03b530d45a67927a23e6122cf4bf0d34767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09880c3354e3e8841fe8c2a4b5d3c03b530d45a67927a23e6122cf4bf0d34767->enter($__internal_09880c3354e3e8841fe8c2a4b5d3c03b530d45a67927a23e6122cf4bf0d34767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "                    <div id=\"page-wrapper\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h3>Formulaire pour ajouter un membre</h3>
                            </div>
                            <div class=\"panel-body\">
                                <ul class=\"nav nav-tabs\">
                                    <li class=\"active\" style=\"width: 25%;\">
                                        <a 
                                        \thref=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("er_ajout");
        echo "\" 
                                        \tdata-toggle=\"tab\"
                                        \tonclick=\"return location.href=this.href\"
                                        >
                                            <i class=\"glyphicon glyphicon-plus\"></i>
                                        \tAjouter
                                        </a>
                                    </li>
                                    <li class=\"\" style=\"width: 25%;\">
                                        <a 
                                        \thref=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("er_cherche");
        echo "\" 
                                        \tdata-toggle=\"tab\"
                                        \tonclick=\"return location.href=this.href\"
                                        >
                                            <i class=\"glyphicon glyphicon-th-list\"></i>
                                        \tListes
                                    \t</a>
                                    </li>
                                    <li class=\"\" style=\"width: 25%;\">
                                        <a 
                                        \thref=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("er_admin");
        echo "\" 
                                        \tdata-toggle=\"tab\"
                                        \tonclick=\"return location.href=this.href\"
                                        >
                                            <i class=\"glyphicon glyphicon-lock\"></i>
                                        \tAdmin
                                        </a>
                                    </li>
                                    <li class=\"\" style=\"width: 25%;\">
                                        <a 
                                            href=\"#tabaides\" 
                                            data-toggle=\"tab\"
                                            onclick=\"return false;\"
                                        >
                                            <i class=\"glyphicon glyphicon-question-sign\"></i>
                                            Aides
                                        </a>
                                    </li>
                                </ul>

                                <div class=\"tab-content\">
                                    ";
        // line 54
        $this->displayBlock('tab', $context, $blocks);
        // line 115
        echo "                                </div>
                            </div>
                        </div>                        
                    </div>
                ";
        
        $__internal_09880c3354e3e8841fe8c2a4b5d3c03b530d45a67927a23e6122cf4bf0d34767->leave($__internal_09880c3354e3e8841fe8c2a4b5d3c03b530d45a67927a23e6122cf4bf0d34767_prof);

    }

    // line 54
    public function block_tab($context, array $blocks = array())
    {
        $__internal_9bac1b77239a1ab0f2ffc9aef164e887805c405b30cf45966ce500efa1cbd1ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bac1b77239a1ab0f2ffc9aef164e887805c405b30cf45966ce500efa1cbd1ea->enter($__internal_9bac1b77239a1ab0f2ffc9aef164e887805c405b30cf45966ce500efa1cbd1ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab"));

        // line 55
        echo "                                    \t<br>

                                        ";
        // line 57
        if (($this->getAttribute(($context["message"] ?? $this->getContext($context, "message")), "status", array()) == "succes")) {
            // line 58
            echo "                                        <div class=\"alert alert-success\">
                                            <strong>Succes!</strong> 
                                            ";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute(($context["message"] ?? $this->getContext($context, "message")), "text", array()), "html", null, true);
            echo "
                                        </div>
                                        ";
        }
        // line 62
        echo " 
                                        ";
        // line 63
        if (($this->getAttribute(($context["message"] ?? $this->getContext($context, "message")), "status", array()) == "erreur")) {
            // line 64
            echo "                                        <div class=\"alert alert-danger\">
                                            <strong>Erreur!</strong> 
                                            ";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute(($context["message"] ?? $this->getContext($context, "message")), "text", array()), "html", null, true);
            echo "
                                        </div>
                                        ";
        }
        // line 68
        echo "      

\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t                            ";
        // line 71
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(        // line 72
($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        // line 75
        echo "
\t\t\t                                <div class=\"col-lg-6\" style=\"padding-left: 32px;padding-right: 32px;\">
\t\t\t                                        <div class=\"form-group\">
\t\t\t                                            <label>
\t\t\t                                            \tNom
\t\t\t                                            </label>
\t\t\t                                            ";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom")));
        echo "
\t\t\t                                        </div>
\t\t\t                                        <div class=\"form-group\">
\t\t\t                                            <label>Prenom</label>
\t\t\t                                            ";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Prenom")));
        echo "
\t\t\t                                        </div>
                                                    <div class=\"form-group\">
                                                        <label>Téléphone</label>
                                                        ";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Téléphone")));
        echo "
                                                    </div>
\t\t\t                                        <div class=\"form-group\">
\t\t\t\t                                        <button 
\t\t\t\t                                        \ttype=\"submit\" 
\t\t\t\t                                        \tclass=\"btn btn-success\"
\t\t\t\t                                        >
\t\t\t\t                                    \t\tEnregister
\t\t\t\t                                    \t</button>
\t\t\t                                        </div>
\t\t\t                                </div>
\t\t\t                                <!-- /.col-lg-6 (nested) -->
\t\t\t                                <div class=\"col-lg-6\" style=\"padding-left: 32px;padding-right: 32px;\">
                                                <div class=\"form-group\">
                                                    <label>Fonction</label>
                                                    ";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fonction", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Fonction")));
        echo "
                                                </div>
\t\t                                        <div class=\"form-group\">
\t\t                                            <label>CIN</label>
\t\t                                            ";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cin", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "CIN")));
        echo "
\t\t                                        </div>
\t\t\t                                </div>
\t\t\t                                <!-- /.col-lg-6 (nested) -->
\t                                    ";
        // line 112
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t                            </div>
                                    ";
        
        $__internal_9bac1b77239a1ab0f2ffc9aef164e887805c405b30cf45966ce500efa1cbd1ea->leave($__internal_9bac1b77239a1ab0f2ffc9aef164e887805c405b30cf45966ce500efa1cbd1ea_prof);

    }

    public function getTemplateName()
    {
        return "ERBundle:Membre:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 112,  207 => 108,  200 => 104,  182 => 89,  175 => 85,  168 => 81,  160 => 75,  158 => 72,  157 => 71,  152 => 68,  146 => 66,  142 => 64,  140 => 63,  137 => 62,  131 => 60,  127 => 58,  125 => 57,  121 => 55,  115 => 54,  104 => 115,  102 => 54,  78 => 33,  65 => 23,  52 => 13,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::dream.html.twig' %}

                {% block content %}
                    <div id=\"page-wrapper\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h3>Formulaire pour ajouter un membre</h3>
                            </div>
                            <div class=\"panel-body\">
                                <ul class=\"nav nav-tabs\">
                                    <li class=\"active\" style=\"width: 25%;\">
                                        <a 
                                        \thref=\"{{ path('er_ajout') }}\" 
                                        \tdata-toggle=\"tab\"
                                        \tonclick=\"return location.href=this.href\"
                                        >
                                            <i class=\"glyphicon glyphicon-plus\"></i>
                                        \tAjouter
                                        </a>
                                    </li>
                                    <li class=\"\" style=\"width: 25%;\">
                                        <a 
                                        \thref=\"{{ path('er_cherche') }}\" 
                                        \tdata-toggle=\"tab\"
                                        \tonclick=\"return location.href=this.href\"
                                        >
                                            <i class=\"glyphicon glyphicon-th-list\"></i>
                                        \tListes
                                    \t</a>
                                    </li>
                                    <li class=\"\" style=\"width: 25%;\">
                                        <a 
                                        \thref=\"{{ path('er_admin') }}\" 
                                        \tdata-toggle=\"tab\"
                                        \tonclick=\"return location.href=this.href\"
                                        >
                                            <i class=\"glyphicon glyphicon-lock\"></i>
                                        \tAdmin
                                        </a>
                                    </li>
                                    <li class=\"\" style=\"width: 25%;\">
                                        <a 
                                            href=\"#tabaides\" 
                                            data-toggle=\"tab\"
                                            onclick=\"return false;\"
                                        >
                                            <i class=\"glyphicon glyphicon-question-sign\"></i>
                                            Aides
                                        </a>
                                    </li>
                                </ul>

                                <div class=\"tab-content\">
                                    {% block tab %}
                                    \t<br>

                                        {% if message.status == 'succes' %}
                                        <div class=\"alert alert-success\">
                                            <strong>Succes!</strong> 
                                            {{message.text}}
                                        </div>
                                        {% endif %} 
                                        {% if message.status == 'erreur' %}
                                        <div class=\"alert alert-danger\">
                                            <strong>Erreur!</strong> 
                                            {{message.text}}
                                        </div>
                                        {% endif %}      

\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t                            {{ form_start(
\t\t\t\t                            \tform, 
\t\t\t\t                            \t{'attr': {'class': 'form-horizontal'}}
\t\t\t                            \t) 
\t\t\t                            }}
\t\t\t                                <div class=\"col-lg-6\" style=\"padding-left: 32px;padding-right: 32px;\">
\t\t\t                                        <div class=\"form-group\">
\t\t\t                                            <label>
\t\t\t                                            \tNom
\t\t\t                                            </label>
\t\t\t                                            {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'placeholder': 'Nom'}}) }}
\t\t\t                                        </div>
\t\t\t                                        <div class=\"form-group\">
\t\t\t                                            <label>Prenom</label>
\t\t\t                                            {{ form_widget(form.prenom, {'attr': {'class': 'form-control', 'placeholder': 'Prenom'}}) }}
\t\t\t                                        </div>
                                                    <div class=\"form-group\">
                                                        <label>Téléphone</label>
                                                        {{ form_widget(form.telephone, {'attr': {'class': 'form-control', 'placeholder': 'Téléphone'}}) }}
                                                    </div>
\t\t\t                                        <div class=\"form-group\">
\t\t\t\t                                        <button 
\t\t\t\t                                        \ttype=\"submit\" 
\t\t\t\t                                        \tclass=\"btn btn-success\"
\t\t\t\t                                        >
\t\t\t\t                                    \t\tEnregister
\t\t\t\t                                    \t</button>
\t\t\t                                        </div>
\t\t\t                                </div>
\t\t\t                                <!-- /.col-lg-6 (nested) -->
\t\t\t                                <div class=\"col-lg-6\" style=\"padding-left: 32px;padding-right: 32px;\">
                                                <div class=\"form-group\">
                                                    <label>Fonction</label>
                                                    {{ form_widget(form.fonction, {'attr': {'class': 'form-control', 'placeholder': 'Fonction'}}) }}
                                                </div>
\t\t                                        <div class=\"form-group\">
\t\t                                            <label>CIN</label>
\t\t                                            {{ form_widget(form.cin, {'attr': {'class': 'form-control', 'placeholder': 'CIN'}}) }}
\t\t                                        </div>
\t\t\t                                </div>
\t\t\t                                <!-- /.col-lg-6 (nested) -->
\t                                    {{ form_end(form) }}
\t\t\t                            </div>
                                    {% endblock %}
                                </div>
                            </div>
                        </div>                        
                    </div>
                {% endblock %}", "ERBundle:Membre:ajouter.html.twig", "/opt/lampp/htdocs/user/src/ERBundle/Resources/views/Membre/ajouter.html.twig");
    }
}
