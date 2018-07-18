<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_406cf38bbebdcc484e5d15f00456b86e3cbe019e3b21800a18578a302c07950e extends Twig_Template
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
        $__internal_83f41efb7a4d8fd96f49a9e26eff55cf12d162d04fe52c4cb208aea969f4658c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83f41efb7a4d8fd96f49a9e26eff55cf12d162d04fe52c4cb208aea969f4658c->enter($__internal_83f41efb7a4d8fd96f49a9e26eff55cf12d162d04fe52c4cb208aea969f4658c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_83f41efb7a4d8fd96f49a9e26eff55cf12d162d04fe52c4cb208aea969f4658c->leave($__internal_83f41efb7a4d8fd96f49a9e26eff55cf12d162d04fe52c4cb208aea969f4658c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/opt/lampp/htdocs/user/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
