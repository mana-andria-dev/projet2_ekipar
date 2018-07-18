<?php

/* ERBundle:Default:index.html.twig */
class __TwigTemplate_40044e9863735cf4f248ed907cb49f68ba8aaa1bf43c629483fff21ddd11d745 extends Twig_Template
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
        $__internal_bd47f721f7fe7033045e1e7c63c2e3cc00a471189a6dd131adba95522f2962a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd47f721f7fe7033045e1e7c63c2e3cc00a471189a6dd131adba95522f2962a0->enter($__internal_bd47f721f7fe7033045e1e7c63c2e3cc00a471189a6dd131adba95522f2962a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERBundle:Default:index.html.twig"));

        // line 1
        echo "Helloqs World!
";
        
        $__internal_bd47f721f7fe7033045e1e7c63c2e3cc00a471189a6dd131adba95522f2962a0->leave($__internal_bd47f721f7fe7033045e1e7c63c2e3cc00a471189a6dd131adba95522f2962a0_prof);

    }

    public function getTemplateName()
    {
        return "ERBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Helloqs World!
", "ERBundle:Default:index.html.twig", "/opt/lampp/htdocs/user/src/ERBundle/Resources/views/Default/index.html.twig");
    }
}
