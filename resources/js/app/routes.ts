import { Route } from '@kalel1500/kalion-js';
import DefaultController from '../src/shared/infrastructure/DefaultController';
import DashboardController from "../src/dashboard/infrastructure/DashboardController";
import TagsController from "../src/tags/infrastructure/TagsController";

export function defineRoutes(): void {
    Route.page('home', [DefaultController, 'home']);
    Route.page('post.list', [DashboardController, 'posts']);
    Route.page('tags', [TagsController, 'tags'], true);
}
