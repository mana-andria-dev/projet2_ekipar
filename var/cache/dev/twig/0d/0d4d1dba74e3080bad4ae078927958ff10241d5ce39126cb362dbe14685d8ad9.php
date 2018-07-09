<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_0ed77b3f94e9b46c25f9506317dca66038dd20cf106a9aa5ed767084809cd09a extends Twig_Template
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
        $__internal_6560704fd7ba736326ff2091a9726ba727a6b9c706f23fdd90853d1a1e7c6029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6560704fd7ba736326ff2091a9726ba727a6b9c706f23fdd90853d1a1e7c6029->enter($__internal_6560704fd7ba736326ff2091a9726ba727a6b9c706f23fdd90853d1a1e7c6029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_6560704fd7ba736326ff2091a9726ba727a6b9c706f23fdd90853d1a1e7c6029->leave($__internal_6560704fd7ba736326ff2091a9726ba727a6b9c706f23fdd90853d1a1e7c6029_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "E:\\wamp\\www\\user\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
