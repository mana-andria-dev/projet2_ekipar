<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_0987af3b2136109bc2d88f984abffc6030bda2621a3b437452d4b89f42715a37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_478a802669db5bbd92f215f5b143e6fae0873dea9346dd2031ec5776d1cf27b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_478a802669db5bbd92f215f5b143e6fae0873dea9346dd2031ec5776d1cf27b0->enter($__internal_478a802669db5bbd92f215f5b143e6fae0873dea9346dd2031ec5776d1cf27b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_478a802669db5bbd92f215f5b143e6fae0873dea9346dd2031ec5776d1cf27b0->leave($__internal_478a802669db5bbd92f215f5b143e6fae0873dea9346dd2031ec5776d1cf27b0_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_05ddd2026cd826e8872e5b403cc442ebef6bf1fee10a33047c3f410bd508287f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05ddd2026cd826e8872e5b403cc442ebef6bf1fee10a33047c3f410bd508287f->enter($__internal_05ddd2026cd826e8872e5b403cc442ebef6bf1fee10a33047c3f410bd508287f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_05ddd2026cd826e8872e5b403cc442ebef6bf1fee10a33047c3f410bd508287f->leave($__internal_05ddd2026cd826e8872e5b403cc442ebef6bf1fee10a33047c3f410bd508287f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "E:\\wamp\\www\\user\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
