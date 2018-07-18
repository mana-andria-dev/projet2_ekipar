<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_4c3a1d9fa6a4573ac872a0f55bb1c629edc5f43b98d4fd64b22100af81e0d2ba extends Twig_Template
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
        $__internal_03b67dd2babedea40e77c9956322aadf6d1849108152a61b65ae3264604e3bb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03b67dd2babedea40e77c9956322aadf6d1849108152a61b65ae3264604e3bb4->enter($__internal_03b67dd2babedea40e77c9956322aadf6d1849108152a61b65ae3264604e3bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_03b67dd2babedea40e77c9956322aadf6d1849108152a61b65ae3264604e3bb4->leave($__internal_03b67dd2babedea40e77c9956322aadf6d1849108152a61b65ae3264604e3bb4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/opt/lampp/htdocs/user/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
