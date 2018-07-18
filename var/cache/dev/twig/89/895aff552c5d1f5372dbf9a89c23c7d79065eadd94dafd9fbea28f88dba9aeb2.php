<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_360d338a0eedffe023b4bcd8d97b19e72c7f6fc561616687a3a06be7b3897a44 extends Twig_Template
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
        $__internal_1d0fb6ede372cb4ebce08ddc96630c4d7cee81862b638cc5058a8762170aab0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d0fb6ede372cb4ebce08ddc96630c4d7cee81862b638cc5058a8762170aab0a->enter($__internal_1d0fb6ede372cb4ebce08ddc96630c4d7cee81862b638cc5058a8762170aab0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_1d0fb6ede372cb4ebce08ddc96630c4d7cee81862b638cc5058a8762170aab0a->leave($__internal_1d0fb6ede372cb4ebce08ddc96630c4d7cee81862b638cc5058a8762170aab0a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/opt/lampp/htdocs/user/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
