<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_415876f28c6976afeeafd4d95df761ed734111edaf97d99dc57201d43754a38c extends Twig_Template
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
        $__internal_756fa6812280ec1be6ded250f31305cb07b88f9289b7f4a5d9200cc75e37bf84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_756fa6812280ec1be6ded250f31305cb07b88f9289b7f4a5d9200cc75e37bf84->enter($__internal_756fa6812280ec1be6ded250f31305cb07b88f9289b7f4a5d9200cc75e37bf84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_0e5b4752f5796c3b00ae7a123de17a2e33b329cae92ad3d65f1087c8b3d6fb10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e5b4752f5796c3b00ae7a123de17a2e33b329cae92ad3d65f1087c8b3d6fb10->enter($__internal_0e5b4752f5796c3b00ae7a123de17a2e33b329cae92ad3d65f1087c8b3d6fb10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_756fa6812280ec1be6ded250f31305cb07b88f9289b7f4a5d9200cc75e37bf84->leave($__internal_756fa6812280ec1be6ded250f31305cb07b88f9289b7f4a5d9200cc75e37bf84_prof);

        
        $__internal_0e5b4752f5796c3b00ae7a123de17a2e33b329cae92ad3d65f1087c8b3d6fb10->leave($__internal_0e5b4752f5796c3b00ae7a123de17a2e33b329cae92ad3d65f1087c8b3d6fb10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
