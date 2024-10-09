declare namespace App.Data {
export type ServiceData = {
id: number | null;
number: number;
title: string;
altTitle: string;
description: string;
image: string;
};
export type StepData = {
id: number | null;
number: number;
title: string;
description: string;
executed: boolean;
idService: number;
};
}
