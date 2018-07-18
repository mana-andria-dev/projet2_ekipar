<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_82cb27bc00e004e0db91b23d2f88ca70678553d2e3d82ae83dc2158e362c8908 extends Twig_Template
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
        $__internal_e98fe651d27c3d30a435a3cd7d11bf1c0cd94d24c1d5a3fb3015d7e8d972e96a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e98fe651d27c3d30a435a3cd7d11bf1c0cd94d24c1d5a3fb3015d7e8d972e96a->enter($__internal_e98fe651d27c3d30a435a3cd7d11bf1c0cd94d24c1d5a3fb3015d7e8d972e96a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_e98fe651d27c3d30a435a3cd7d11bf1c0cd94d24c1d5a3fb3015d7e8d972e96a->leave($__internal_e98fe651d27c3d30a435a3cd7d11bf1c0cd94d24c1d5a3fb3015d7e8d972e96a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/opt/lampp/htdocs/user/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
