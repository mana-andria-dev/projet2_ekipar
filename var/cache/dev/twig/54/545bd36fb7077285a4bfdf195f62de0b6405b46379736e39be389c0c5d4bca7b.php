<?php

/* ERBundle:Membre:edit.html.twig */
class __TwigTemplate_dfc65a9c0f3125e523d1c9cd1308b03654bc6e5d97804e65b7ee50b5b1520895 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::dream.html.twig", "ERBundle:Membre:edit.html.twig", 1);
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
        $__internal_9c4caa18ede7950e3329bd6849765918324a33f20d85a449a38131e892d3fbf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c4caa18ede7950e3329bd6849765918324a33f20d85a449a38131e892d3fbf7->enter($__internal_9c4caa18ede7950e3329bd6849765918324a33f20d85a449a38131e892d3fbf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERBundle:Membre:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c4caa18ede7950e3329bd6849765918324a33f20d85a449a38131e892d3fbf7->leave($__internal_9c4caa18ede7950e3329bd6849765918324a33f20d85a449a38131e892d3fbf7_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_1c02523627aa92a78f2677cb00e04f88a5b3f456322d9adec5eb175b7e60f368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c02523627aa92a78f2677cb00e04f88a5b3f456322d9adec5eb175b7e60f368->enter($__internal_1c02523627aa92a78f2677cb00e04f88a5b3f456322d9adec5eb175b7e60f368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        // line 121
        echo "                                </div>
                            </div>
                        </div>                        
                    </div>
                ";
        
        $__internal_1c02523627aa92a78f2677cb00e04f88a5b3f456322d9adec5eb175b7e60f368->leave($__internal_1c02523627aa92a78f2677cb00e04f88a5b3f456322d9adec5eb175b7e60f368_prof);

    }

    // line 54
    public function block_tab($context, array $blocks = array())
    {
        $__internal_eb310209e65b4c0196053291adceb3b54537b7428059d39a947c24cd7748cf43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb310209e65b4c0196053291adceb3b54537b7428059d39a947c24cd7748cf43->enter($__internal_eb310209e65b4c0196053291adceb3b54537b7428059d39a947c24cd7748cf43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab"));

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
                                                    <div class=\"form-group\">
                                                        <button 
                                                            type=\"submit\" 
                                                            class=\"btn btn-success\"
                                                        >
                                                            Modifier
                                                        </button>
                                                        <a 
                                                            href=\"";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("er_cherche");
        echo "\"
                                                            class=\"btn btn-warning\"
                                                        >
                                                            Annuler
                                                        </a>
                                                    </div>
\t\t\t                                </div>
\t\t\t                                <!-- /.col-lg-6 (nested) -->
\t\t\t                                <div class=\"col-lg-6\" style=\"padding-left: 32px;padding-right: 32px;\">
                                                <div class=\"form-group\">
                                                    <label>Fonction</label>
                                                    ";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fonction", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Fonction")));
        echo "
                                                </div>
\t\t                                        <div class=\"form-group\">
\t\t                                            <label>CIN</label>
\t\t                                            ";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cin", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "CIN", "readonly" => "true")));
        echo "
\t\t                                        </div>
\t\t\t                                </div>
\t\t\t                                <!-- /.col-lg-6 (nested) -->
\t                                    ";
        // line 118
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t                            </div>
                                    ";
        
        $__internal_eb310209e65b4c0196053291adceb3b54537b7428059d39a947c24cd7748cf43->leave($__internal_eb310209e65b4c0196053291adceb3b54537b7428059d39a947c24cd7748cf43_prof);

    }

    public function getTemplateName()
    {
        return "ERBundle:Membre:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 118,  216 => 114,  209 => 110,  195 => 99,  182 => 89,  175 => 85,  168 => 81,  160 => 75,  158 => 72,  157 => 71,  152 => 68,  146 => 66,  142 => 64,  140 => 63,  137 => 62,  131 => 60,  127 => 58,  125 => 57,  121 => 55,  115 => 54,  104 => 121,  102 => 54,  78 => 33,  65 => 23,  52 => 13,  41 => 4,  35 => 3,  11 => 1,);
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
                                                    <div class=\"form-group\">
                                                        <button 
                                                            type=\"submit\" 
                                                            class=\"btn btn-success\"
                                                        >
                                                            Modifier
                                                        </button>
                                                        <a 
                                                            href=\"{{ path('er_cherche') }}\"
                                                            class=\"btn btn-warning\"
                                                        >
                                                            Annuler
                                                        </a>
                                                    </div>
\t\t\t                                </div>
\t\t\t                                <!-- /.col-lg-6 (nested) -->
\t\t\t                                <div class=\"col-lg-6\" style=\"padding-left: 32px;padding-right: 32px;\">
                                                <div class=\"form-group\">
                                                    <label>Fonction</label>
                                                    {{ form_widget(form.fonction, {'attr': {'class': 'form-control', 'placeholder': 'Fonction'}}) }}
                                                </div>
\t\t                                        <div class=\"form-group\">
\t\t                                            <label>CIN</label>
\t\t                                            {{ form_widget(form.cin, {'attr': {'class': 'form-control', 'placeholder': 'CIN', 'readonly': 'true'}}) }}
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
                {% endblock %}", "ERBundle:Membre:edit.html.twig", "/opt/lampp/htdocs/user/src/ERBundle/Resources/views/Membre/edit.html.twig");
    }
}
