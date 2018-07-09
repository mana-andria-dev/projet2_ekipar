<?php

/* ERBundle:Default:index.html.twig */
class __TwigTemplate_b544156716b514b0690c82103a0610b812492cead41d16242ed2c2b3ea7966c3 extends Twig_Template
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
        $__internal_fbc229ba79f9efb7f31c603015020411d794b7b2a2fd10f2ff99f35eeebc09f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbc229ba79f9efb7f31c603015020411d794b7b2a2fd10f2ff99f35eeebc09f7->enter($__internal_fbc229ba79f9efb7f31c603015020411d794b7b2a2fd10f2ff99f35eeebc09f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERBundle:Default:index.html.twig"));

        // line 1
        echo "Helloqs World!
";
        
        $__internal_fbc229ba79f9efb7f31c603015020411d794b7b2a2fd10f2ff99f35eeebc09f7->leave($__internal_fbc229ba79f9efb7f31c603015020411d794b7b2a2fd10f2ff99f35eeebc09f7_prof);

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
