<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_5cbcf378b9312a5ec3b687f97ddee2000149bd431d7fc22695742620f4f77ba5 extends Twig_Template
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
        $__internal_5a90eb6eff9b188a2dce880d27a136fb4e3d2076df06064b2b26398bc7ff15a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a90eb6eff9b188a2dce880d27a136fb4e3d2076df06064b2b26398bc7ff15a5->enter($__internal_5a90eb6eff9b188a2dce880d27a136fb4e3d2076df06064b2b26398bc7ff15a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_d08cede2c3201400f875cfef3ad4c6f7f52e604b160f3a8b8190100018387b4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d08cede2c3201400f875cfef3ad4c6f7f52e604b160f3a8b8190100018387b4c->enter($__internal_d08cede2c3201400f875cfef3ad4c6f7f52e604b160f3a8b8190100018387b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_5a90eb6eff9b188a2dce880d27a136fb4e3d2076df06064b2b26398bc7ff15a5->leave($__internal_5a90eb6eff9b188a2dce880d27a136fb4e3d2076df06064b2b26398bc7ff15a5_prof);

        
        $__internal_d08cede2c3201400f875cfef3ad4c6f7f52e604b160f3a8b8190100018387b4c->leave($__internal_d08cede2c3201400f875cfef3ad4c6f7f52e604b160f3a8b8190100018387b4c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}