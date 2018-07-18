<?php

/* @ER/Membre/svg_1.html */
class __TwigTemplate_7ac972042e6b8e4a8270a40283e625e392d5a3ba35ef61e0153b1369c84b3179 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cefc730c902fe041b23cf0cfcf363b8cf39aa06dcd6beaea80aaa539b6e5cfb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cefc730c902fe041b23cf0cfcf363b8cf39aa06dcd6beaea80aaa539b6e5cfb0->enter($__internal_cefc730c902fe041b23cf0cfcf363b8cf39aa06dcd6beaea80aaa539b6e5cfb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ER/Membre/svg_1.html"));

        // line 1
        echo "\t";
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_cefc730c902fe041b23cf0cfcf363b8cf39aa06dcd6beaea80aaa539b6e5cfb0->leave($__internal_cefc730c902fe041b23cf0cfcf363b8cf39aa06dcd6beaea80aaa539b6e5cfb0_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_c58cc6fe48e2636a1b15b78d1421e91aa714d3d15bca37026e10c963cb689dc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c58cc6fe48e2636a1b15b78d1421e91aa714d3d15bca37026e10c963cb689dc3->enter($__internal_c58cc6fe48e2636a1b15b78d1421e91aa714d3d15bca37026e10c963cb689dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 2
        echo "\t<style type=\"text/css\">
\t\ttd {
\t\t\tborder: none !important;
\t\t\tcolor: white !important;
\t\t}
\t</style>
\t\t<div class=\"row\" style=\"border: 1px solid black; margin-top: 10px; background: #757272;\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t";
        // line 10
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Nom</td>
\t\t\t\t\t\t<td>:</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom")));
        echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Prenom</td>
\t\t\t\t\t\t<td>:</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Prenom")));
        echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Fonction</td>
\t\t\t\t\t\t<td>:</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
        // line 30
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
        // line 51
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "


\t\t\t</div>
\t\t</div>
\t";
        
        $__internal_c58cc6fe48e2636a1b15b78d1421e91aa714d3d15bca37026e10c963cb689dc3->leave($__internal_c58cc6fe48e2636a1b15b78d1421e91aa714d3d15bca37026e10c963cb689dc3_prof);

    }

    public function getTemplateName()
    {
        return "@ER/Membre/svg_1.html";
    }

    public function getDebugInfo()
    {
        return array (  99 => 51,  75 => 30,  65 => 23,  55 => 16,  46 => 10,  36 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("\t{% block content %}
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
\t{% endblock %}", "@ER/Membre/svg_1.html", "/opt/lampp/htdocs/user/src/ERBundle/Resources/views/Membre/svg_1.html");
    }
}
