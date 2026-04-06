<?php
/**
 * Title: AI-SAKU: 施工事例一覧（建設業）
 * Slug: aisaku/works
 * Categories: aisaku
 * Keywords: works, gallery, 施工事例
 * Description: 3カラムグリッドの施工事例一覧セクション
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--30)">
	<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"textColor":"secondary","fontSize":"2-xl"} -->
	<h2 class="wp-block-heading has-text-align-center has-secondary-color has-text-color has-2-xl-font-size" style="margin-bottom:var(--wp--preset--spacing--20)"><?php esc_html_e( '施工事例', 'aisaku' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"textColor":"text"} -->
	<p class="has-text-align-center has-text-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--50)"><?php esc_html_e( 'これまでに手がけた施工事例の一部をご紹介いたします。', 'aisaku' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"border":{"radius":"8px","width":"1px","color":"#e2e8f0"},"spacing":{"padding":{"bottom":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="border-color:#e2e8f0;border-width:1px;border-radius:8px;padding-bottom:var(--wp--preset--spacing--30)">
				<!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":{"topLeft":"8px","topRight":"8px"}}}} -->
				<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder.jpg' ) ); ?>" alt="<?php esc_attr_e( '施工事例1', 'aisaku' ); ?>" style="border-top-left-radius:8px;border-top-right-radius:8px"/></figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
				<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem"}},"textColor":"primary"} -->
					<p class="has-primary-color has-text-color" style="font-size:0.75rem"><?php esc_html_e( '外壁塗装', 'aisaku' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:heading {"level":3,"fontSize":"md"} -->
					<h3 class="wp-block-heading has-md-font-size"><?php esc_html_e( '○○市 A様邸 外壁塗装工事', 'aisaku' ); ?></h3>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"border":{"radius":"8px","width":"1px","color":"#e2e8f0"},"spacing":{"padding":{"bottom":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="border-color:#e2e8f0;border-width:1px;border-radius:8px;padding-bottom:var(--wp--preset--spacing--30)">
				<!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":{"topLeft":"8px","topRight":"8px"}}}} -->
				<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder.jpg' ) ); ?>" alt="<?php esc_attr_e( '施工事例2', 'aisaku' ); ?>" style="border-top-left-radius:8px;border-top-right-radius:8px"/></figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
				<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem"}},"textColor":"primary"} -->
					<p class="has-primary-color has-text-color" style="font-size:0.75rem"><?php esc_html_e( 'リフォーム', 'aisaku' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:heading {"level":3,"fontSize":"md"} -->
					<h3 class="wp-block-heading has-md-font-size"><?php esc_html_e( '○○市 B様邸 キッチンリフォーム', 'aisaku' ); ?></h3>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"border":{"radius":"8px","width":"1px","color":"#e2e8f0"},"spacing":{"padding":{"bottom":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="border-color:#e2e8f0;border-width:1px;border-radius:8px;padding-bottom:var(--wp--preset--spacing--30)">
				<!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":{"topLeft":"8px","topRight":"8px"}}}} -->
				<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder.jpg' ) ); ?>" alt="<?php esc_attr_e( '施工事例3', 'aisaku' ); ?>" style="border-top-left-radius:8px;border-top-right-radius:8px"/></figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
				<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem"}},"textColor":"primary"} -->
					<p class="has-primary-color has-text-color" style="font-size:0.75rem"><?php esc_html_e( '新築', 'aisaku' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:heading {"level":3,"fontSize":"md"} -->
					<h3 class="wp-block-heading has-md-font-size"><?php esc_html_e( '○○市 C様邸 新築工事', 'aisaku' ); ?></h3>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
		<!-- wp:button {"backgroundColor":"primary","style":{"border":{"radius":"4px"}}} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button" style="border-radius:4px"><?php esc_html_e( '施工事例をもっと見る', 'aisaku' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
