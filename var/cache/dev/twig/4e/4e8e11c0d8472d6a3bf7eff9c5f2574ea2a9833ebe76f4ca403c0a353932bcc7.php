<?php

/* ERBundle:Membre:ajouter.html.twig */
class __TwigTemplate_70dcf40dd26ad29984d146cbc22fa9d0f64db01e7bff5652c49427f3c6364fea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::membre.html.twig", "ERBundle:Membre:ajouter.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::membre.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ace3d8cf3ec7394b223de36e677d3484e5fe49d258a4979c1a9daa2f6a04acc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ace3d8cf3ec7394b223de36e677d3484e5fe49d258a4979c1a9daa2f6a04acc->enter($__internal_6ace3d8cf3ec7394b223de36e677d3484e5fe49d258a4979c1a9daa2f6a04acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERBundle:Membre:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ace3d8cf3ec7394b223de36e677d3484e5fe49d258a4979c1a9daa2f6a04acc->leave($__internal_6ace3d8cf3ec7394b223de36e677d3484e5fe49d258a4979c1a9daa2f6a04acc_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_8e7e3dead6eb7317655990c0ab945d2d4d020dbe12e5659b8b42730be024b478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e7e3dead6eb7317655990c0ab945d2d4d020dbe12e5659b8b42730be024b478->enter($__internal_8e7e3dead6eb7317655990c0ab945d2d4d020dbe12e5659b8b42730be024b478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "\t<style type=\"text/css\">
\t\ttd {
\t\t\tborder: none !important;
\t\t\tcolor: white !important;
\t\t}
\t</style>
\t\t<div class=\"row\" style=\"border: 1px solid black; margin-top: 10px; background: #757272;\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Nom</td>
\t\t\t\t\t\t<td>:</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom")));
        echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Prenom</td>
\t\t\t\t\t\t<td>:</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Prenom")));
        echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Fonction</td>
\t\t\t\t\t\t<td>:</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fonction", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Fonction")));
        echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>

\t\t\t\t<div class=\"row pull-right\" style=\"margin-bottom: 10px;\">
\t\t\t\t\t<a 
\t\t\t\t\t\thref=\"\" 
\t\t\t\t\t\tclass=\"btn btn-primary\" 
\t\t\t\t\t\tstyle=\"width: 200px; margin-right: 5px;\"
\t\t\t\t\t>
\t\t\t\t\t\tNouveau
\t\t\t\t\t</a>
\t\t\t\t\t<input 
\t\t\t\t\t\ttype=\"submit\" 
\t\t\t\t\t\tname=\"Ajouter\" 
\t\t\t\t\t\tclass=\"btn btn-success\"
\t\t\t\t\t\tstyle=\"width: 200px; margin-right: 28px;\"
\t\t\t\t\t>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t";
        // line 53
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "


\t\t\t</div>
\t\t</div>
\t";
        
        $__internal_8e7e3dead6eb7317655990c0ab945d2d4d020dbe12e5659b8b42730be024b478->leave($__internal_8e7e3dead6eb7317655990c0ab945d2d4d020dbe12e5659b8b42730be024b478_prof);

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
        return array (  103 => 53,  79 => 32,  69 => 25,  59 => 18,  50 => 12,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::membre.html.twig' %}

\t{% block content %}
\t<style type=\"text/css\">
\t\ttd {
\t\t\tborder: none !important;
\t\t\tcolor: white !important;
\t\t}
\t</style>
\t\t<div class=\"row\" style=\"border: 1px solid black; margin-top: 10px; background: #757272;\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t{{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Nom</td>
\t\t\t\t\t\t<td>:</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t{{ form_widget(form.nom, {'attr': {'class': 'form-control', 'placeholder': 'Nom'}}) }}
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Prenom</td>
\t\t\t\t\t\t<td>:</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t{{ form_widget(form.prenom, {'attr': {'class': 'form-control', 'placeholder': 'Prenom'}}) }}
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Fonction</td>
\t\t\t\t\t\t<td>:</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t{{ form_widget(form.fonction, {'attr': {'class': 'form-control', 'placeholder': 'Fonction'}}) }}
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>

\t\t\t\t<div class=\"row pull-right\" style=\"margin-bottom: 10px;\">
\t\t\t\t\t<a 
\t\t\t\t\t\thref=\"\" 
\t\t\t\t\t\tclass=\"btn btn-primary\" 
\t\t\t\t\t\tstyle=\"width: 200px; margin-right: 5px;\"
\t\t\t\t\t>
\t\t\t\t\t\tNouveau
\t\t\t\t\t</a>
\t\t\t\t\t<input 
\t\t\t\t\t\ttype=\"submit\" 
\t\t\t\t\t\tname=\"Ajouter\" 
\t\t\t\t\t\tclass=\"btn btn-success\"
\t\t\t\t\t\tstyle=\"width: 200px; margin-right: 28px;\"
\t\t\t\t\t>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t{{ form_end(form) }}


\t\t\t</div>
\t\t</div>
\t{% endblock %}", "ERBundle:Membre:ajouter.html.twig", "/opt/lampp/htdocs/user/src/ERBundle/Resources/views/Membre/ajouter.html.twig");
    }
}
